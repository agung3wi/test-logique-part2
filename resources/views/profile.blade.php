@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('setProfile') }}">
                        @csrf

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <div id="addressList">
                                        <input class="form-control" name="address[]" type="text" placeholder="Enter your address">
                                    </div>
                                    <button type="button" class="btn btn-primary btn-add-address" id="btnAddAddress">
                                        +
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="date_of_birth">Date Of Birth</label>
                                    <input class="form-control datepicker" name="date_of_birth" type="text" placeholder="Enter your Date Of Birth">
                                    @if($errors->has('date_of_birth'))
                                    <div class="error">{{ $errors->first('date_of_birth') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="member_type">Member Of Type</label>
                                    <select class="form-control chosen-select" name="member_type">
                                        <option value="1">Silver</option>
                                        <option value="2">Gold</option>
                                        <option value="3">Platinum</option>
                                        <option value="4">Black</option>
                                        <option value="5">VIP</option>
                                        <option value="6">VVIP</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="ccnumber">Credit Card Number</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="0000 0000 0000 0000" name="credit_card">
                                        @if($errors->has('credit_card'))
                                        <div class="error">{{ $errors->first('credit_card') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="ccmonth">Month</label>
                                <select class="form-control" id="ccmonth">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="ccyear">Year</label>
                                <select class="form-control" id="ccyear">
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>
                                    <option>2025</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="cvv">CVV/CVC</label>
                                    <input class="form-control" id="cvv" type="text" placeholder="123">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">&nbsp;</label>
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
