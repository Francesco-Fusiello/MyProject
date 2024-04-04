<x-layout>

    <div class="content bg-gradient bg-black">
        <div class="row justify-content-center">
            <div class="col-4">

                <!-- Pills content -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                        <form method="POST" action="/register">
                            @csrf
                            <div class="mb-3 text-light ">
                                <p class="text-center fs-1 text-light ">Registrazione:</p>

                                <hr class="border border-danger border-2 opacity-50">
                                <!-- Name input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="text" name="name" id="loginName" class="form-control"
                                        value="{{ @old('name') }}" />
                                    <label class="form-label" for="loginName">Nome</label>

                                    @error('name')
                                        <span> {{ $message }} </span>
                                    @enderror
                                </div>

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

                                <!-- Password confirmation input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="password" name="password_confirmation" id="loginPassword"
                                        class="form-control" />
                                    <label class="form-label" for="loginPassword">Password</label>
                                </div>


                                <!-- 2 column grid layout -->
                                <div class="row mb-4">
                                    <div class="col-md-6 d-flex justify-content-center">

                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                        </form>
                    </div>

                </div>
            </div>


</x-layout>