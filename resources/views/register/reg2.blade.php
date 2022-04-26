<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <img src="logo.png" alt="UKlise Logo" style="width: 30%;height: 30%; padding: 1%">
                <h3>Step 2</h3>
                <h5>For Your Account Security and Verification, Please Fill OTP that You Receive from Your Email.</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="token">Fill OTP Code</label>
                        <input type="text" class="form-control" id="token" name="token" placeholder="Enter Your OTP Token" required>
                        <button type="submit" class="btn-primary btn">Verify</button>
            </div>
        </div>
    </div>
</div>