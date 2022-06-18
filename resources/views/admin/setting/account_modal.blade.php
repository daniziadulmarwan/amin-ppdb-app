<div class="modal fade" id="userAccount" tabindex="-1" aria-labelledby="userAccountLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-4">
                    <div class="avatar-md mx-auto mb-4">
                        <div class="avatar-title bg-light rounded-circle text-primary h1">
                            <i class='bx bx-lock'></i>
                        </div>
                    </div>
  
                    <div class="row">
                        <div class="col-xl-12">
                            
                            <form action="/admin/setting/account" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" autocomplete="off">
                                </div>
                                <div class="mb-4">
                                    <label for="role" class="form-label">Role</label>
                                    <select class="form-select" name="role">
                                        <option selected>Choose</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" autocomplete="off">
                                </div> --}}
                                <div>
                                    <button type="submit" class="btn btn-primary w-100">Create New User</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>