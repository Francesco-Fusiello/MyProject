<x-layout>

    <div class="content  login">
        <!-- Pills content -->
        <div class="row tab-content justify-content-center">

            <div class="col-6">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                    <form method="POST" action="/login">
                        @csrf
                        <div class="mb-3 text-light ">
                            <p
                                class="text-center title_login fs-1 bg-light p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
                                Login:</p>

                            <hr class="border border-primary border-2 opacity-50">

                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" name="email" id="loginName" class="form-control"
                                    value="{{ @old('email') }}" />
                                <label class="form-label" for="loginName">Email</label>

                                @error('email')
                                    <span> {{ $message }} </span>
                                @enderror
                            </div>

                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" name="password" id="loginPassword" class="form-control" />
                                <label class="form-label" for="loginPassword">Password</label>

                                @error('password')
                                    <span> {{ $message }} </span>
                                @enderror
                            </div>
                            <!-- 2 column grid layout -->
                            <div class="row mb-4">

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                                <!-- Register buttons -->
                                <div class=" ">
                                    <div class="row d-flex justify-content-around">
                                        <div class="text-start col-6">
                                            <p>Not a member?
                                                <a href="/register">Register</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Pills content -->
        </div>
</div>



</x-layout>