@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Posts</h1>
                <a href="{{ route('posts.paginated') }}" class="btn btn-primary">Refresh</a>
            </div>



            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Content</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->content }}</td>
                            <td>
                                {{ $post->category->name ?? 'Uncategorized' }}
                            </td>
                            <td>
                                {{ $post->user->name ?? 'Unknown' }}
                            </td>
                            <td>
                                <span class="badge bg-{{ $post->status == 'published' ? 'success' : 'secondary' }}">
                                    {{ $post->status }}
                                </span>
                            </td>
                            <td>{{ $post->created_at }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No posts found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination Links -->
            <div class="d-flex justify-content-center">
                {{ $posts->links() }}
            </div>

            <div class="text-center mt-2">
                <p>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</p>
                <p>Total Posts: {{ $posts->total() }}</p>
            </div>
        </div>
    </div>
</div>
@endsection

