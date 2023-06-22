@extends('layout.master')
<title>Contact Us</title>
<style>
    #contactus a {
        color: aqua;
        text-decoration: underline;
    }
</style>

@section('content')
<div class="container py-5">
    <div class="d-flex row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-sm">
                <form class="form-horizontal" action="" method="">
                    <fieldset>
                        <legend class="text-center">Contact us</legend>

                        <!-- Name input-->
                        <div class="form-group py-3">
                            <label class="col-md-3 control-label" for="name">Name</label>
                            <div class="col">
                                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group py-3">
                            <label class="col-md-3 control-label" for="email">E-mail</label>
                            <div class="col">
                                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                            </div>
                        </div>

                        <!-- Message body -->
                        <div class="form-group py-3">
                            <label class="col-md-3 control-label" for="message">Your message</label>
                            <div class="col">
                                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group py-3">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-lg text-white" style="background-color: #203D4A;">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@stop