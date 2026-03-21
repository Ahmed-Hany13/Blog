<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
    private array $errors = [];
    private array $data = [];

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function validators($field, $rules)
    {
        if (!isset($this->data[$field])) {
            $this->errors[$field] = "$field is missing";
            return $this;
        }
        $value = trim(htmlspecialchars($this->data[$field]));

        switch ($rules) {
            case 'required':
                if (empty($value)) {
                    $this->errors[$field] = "$field is required";
                }
                break;
            case 'email':
                if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->errors[$field] = "invalid $field";
                }
                break;
            case "password":
                if (!preg_match("/[A-Z]/", $value)) {
                    $this->errors[$field] = "password must contain uppercase";
                }
                if (!preg_match("/[a-z]/", $value)) {
                    $this->errors[$field] = "password must contain lowercase";
                }
                if (!preg_match("/[0-9]/", $value)) {
                    $this->errors[$field] = "password must contain numbers";
                }
                break;
            case "max":
                if (strlen($value) > 35) {
                    $this->errors[$field] = "$field mustn't exceed 35 character";
                }
                break;
            case "min":
                if (strlen($value) < 3) {
                    $this->errors[$field] = "$field must be at least 3 character";
                }
                break;
            case "phone":
                if (!preg_match('/^\+?[\d\s\-\(\)]+$/', $value)) {
                    $this->errors[$field] = "invalid $field";
                }
                break;
            default:
                $this->errors[$field] = "Unknown validation rule '$rules'";
        }

        return $this;
    }


    public function isValidated()
    {
        return empty($this->errors);
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function getError($field)
    {
        return $this->errors[$field] ?? null;
    }
}
