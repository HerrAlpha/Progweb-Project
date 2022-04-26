<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="text-align: center">
                    <img src="logo.png" alt="UKlise Logo" style="width: 30%;height: 30%; padding: 1%">
                    <h3>Step 3</h3>
                    <h5>Complete Your Registration.</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="developer">What are you prefered on?</label><br>
                                    <input class="form-check-input" type="checkbox" value="Laravel" name="web" id="Laravel" @if(old('web')=='Laravel') {{'checked'}} @endif>
                                    <label class="form-check-label" for="Laravel">
                                       Laravel Framework
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="Flutter" name="app" id="Flutter" @if(old('app')=='Flutter') {{'checked'}} @endif>
                                    <label class="form-check-label" for="Flutter">
                                      Flutter Framework
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Enter Your Description" required>
                            </div>
                            <div class="col-md-12" style="text-align-last: right">
                                <button class="btn btn-secondary" type="submit">Back</button>
                                <button class="btn btn-red" type="button">Cancel</button>
                                <button class="btn btn-primary" type="submit">Next</button>
                            </div>
    </div>
</div>