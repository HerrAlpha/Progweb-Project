<div class="container" style="padding:3%;">
    <div class="row">
        <div class="col-md-3 col-md-offset-3">
        </div>
        <div class="col-md-6 col-md-offset-3">
    <div class="card">
        <div class="card-header" style="text-align: center">
            <img src="logo.png" alt="UKlise Logo" style="width: 30%;height: 30%; padding: 1%">
            <h3>Welcome Developers</h3>
            <h5>Before You Start it, Please Register Your Account</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Your Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Next</button>
            </form>
        </div>
    </div>
        </div>
        <div class="col-md-3 col-md-offset-3">
        </div>

    </div>
</div>