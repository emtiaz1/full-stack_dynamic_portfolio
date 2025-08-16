@extends('admin.dashboard')

@section('content')
    <div class="container bg-white p-4 rounded shadow">
        <h1 class="h3 mb-4"><i class="fa fa-comments text-primary me-2"></i>Contact Messages</h1>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle shadow rounded overflow-hidden">
                <thead class="table-primary">
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($messages as $msg)
                        <tr>
                            <td>
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($msg->mail) }}&background=6366f1&color=fff&size=32"
                                    alt="avatar" class="rounded-circle shadow-sm" width="32" height="32">
                            </td>
                            <td class="fw-semibold">{{ $msg->name }}</td>
                            <td><i class="fa fa-envelope text-secondary me-1"></i>{{ $msg->mail }}</td>
                            <td><span class="badge bg-info text-dark">{{ $msg->subj }}</span></td>
                            <td style="max-width:180px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"
                                title="{{ $msg->message }}">
                                <i
                                    class="fa fa-comment-dots text-muted me-1"></i>{{ \Illuminate\Support\Str::limit($msg->message, 40) }}
                            </td>
                            <td><span class="badge bg-light text-secondary border"><i
                                        class="fa fa-clock me-1"></i>{{ $msg->created_at->format('Y-m-d H:i') }}</span></td>
                            <td class="text-center">
                                <form id="delete-form-{{ $msg->id }}" action="{{ route('admin.messages.delete', $msg->id) }}"
                                    method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-link text-danger p-0" title="Delete"
                                        data-bs-toggle="modal" data-bs-target="#deleteModal" data-message-id="{{ $msg->id }}">
                                        <i class="fas fa-trash-alt fa-lg"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-4">No messages found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Delete Confirmation Modal (Bootstrap) -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this message? This action cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let deleteFormId = null;
        // When modal is shown, set the form id to delete
        var deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var messageId = button.getAttribute('data-message-id');
            deleteFormId = 'delete-form-' + messageId;
        });
        document.getElementById('confirmDeleteBtn').onclick = function () {
            if (deleteFormId) {
                document.getElementById(deleteFormId).submit();
            }
            var modal = bootstrap.Modal.getInstance(deleteModal);
            modal.hide();
        };
    </script>
@endsection