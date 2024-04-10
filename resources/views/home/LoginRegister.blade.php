<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button class="login-header-tab" onclick="showForm('login')">
                <h1>LOGIN</h1>
            </button>
            <button class="register-header-tab" onclick="showForm('register')">
                <h1>REGISTER</h1>
            </button>
        </div>

        <div class="modal-body">
            <form class="login-modal-form" action="" method="POST">
                <div class="modal--input">
                    <label>Email</label>
                    <input type="text" name="email" required/>
                </div>
                <div class="modal--input">
                    <label>Password</label>
                    <input type="password" name="pwd" required/>
                </div>
                <div class="modal--btn">
                    <button type="submit">Sign In</button>
                </div>
            </form>

            <form class="register-modal-form" enctype="multipart/form-data" method="POST" action="{{route('register')}}">
                {{ csrf_field() }}
                <div class="modal--input">
                    <label>Username</label>
                    <input type="text" name="username" required/>
                </div>
                <div class="modal--input">
                    <label>Email Address</label>
                    <input type="text" name="email" required/>
                </div>
                <div class="modal--input">
                    <label>Password</label>
                    <input type="password" name="pwd" required/>
                </div>
                <div class="modal--input">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_pwd" required/>
                </div>
                <div class="modal--btn">
                    <button type="submit">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{url('js/loginRegister.js')}}"></script>
