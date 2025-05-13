
        <!-- Password Update -->
        <div class="col-md-8 mb-4">
            <div class="card profile-card">
                <div class="card-header d-flex align-items-center">
                    <i class="fas fa-lock fs-4 me-2 text-primary"></i>
                    <h5 class="card-title mb-0">Update Password</h5>
                </div>
                
                <div class="card-body p-4">
                    @if (session('status') === 'password-updated')
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <i class="fas fa-check-circle me-2"></i>
                            <div>Your password has been updated successfully!</div>
                        </div>
                    @endif
                    
                    <form method="POST" action="{{route('user-password.update')}}">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="current_password" class="form-label">Current Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input id="current_password" name="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" autocomplete="current-password" />
                            </div>
                            @error('current_password')
                                <div class="text-danger mt-1 small">{{$message}}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password" />
                            </div>
                            @error('password')
                                <div class="text-danger mt-1 small">{{$message}}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" autocomplete="new-password" />
                            </div>
                            @error('password_confirmation')
                                <div class="text-danger mt-1 small">{{$message}}</div>
                            @enderror
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-update" type="submit">
                                <i class="fas fa-key me-2"></i> Update Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
 