

@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">
                <div class="container  ">
                    <form action="">
                        <div class="row">
                            <div class="col-md-2 pe-0 col-sm-12">
                                <div class="btn radio-btn mb-3"> <label class="radio">
                                        <input type="radio" value="a" name="book" checked>
                                        Roundtrip <span></span>
                                    </label> </div>
                            </div>
                            <div class="col-md-2 pe-0 col-sm-12">
                                <div class="btn radio-btn mb-3">
                                    <label class="radio"> <input type="radio" value="a" name="book"> One way <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2 pe-0 col-sm-12">
                                <div class="btn radio-btn mb-3">
                                    <label class="radio"> <input type="radio" value="a" name="book"> Multi-City <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">FLYING FROM</p>
                                    <input class="inputbox" placeholder="City or Airport" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">FLYING TO</p> <input class="inputbox" placeholder="City or Airport"
                                        type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">DEPARTING</p>
                                    <input class="inputbox textmuted" type="date">
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">RETURNING</p> <input class="inputbox textmuted " type="date">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">ADULTS(18+)</p> <select class="border-0 outline-none">
                                        <option value="" hidden selected>0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">CHILDREN(0-17)</p> <select class="border-0 outline-none">
                                        <option value="" hidden selected>0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">TRAVEL CLASS</p> <select class="border-0 outline-none">
                                        <option value="" hidden selected>Class</option>
                                        <option value="1">Economy</option>
                                        <option value="2">Premium</option>
                                        <option value="3">Business</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                        <div class="col-md-4 mb-4">
                            <div class="btn-md btn-primary form-control text-center">Book</div>
                        </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

