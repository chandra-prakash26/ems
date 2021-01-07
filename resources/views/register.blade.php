<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif
        <div class="container col-xs-12 col-xs-offset-0 col-sm-offset-3 col-sm-6">
            <section id="Registration">
                <form action="{{URL::to('/store')}}" method="post">
                    <fieldset>
                        <div class="form-group row border col-lg-20 col-md-20 col-sm-20  well">
                            <h2 class="bg-danger text-success text-center">Register Employee</h2>
                            <br />
                            <div class="form-group row col-sm-offset-1 ">
                                <label for="first_name" class="col-sm-2 col-form-label">First Name:</label>
                                <input type="text" id="first_name" name="first_name" value="" required aria-required="true" />
                            </div>
                            <br />
                            <div class="form-group row col-sm-offset-1">
                                <label for="last_name" class="col-sm-2 col-form-label">Last Name:</label>
                                <input type="text" id="last_name" name="last_name" value="" required aria-required="true" />
                            </div>
                            <br />
                            <div class="form-group row col-sm-offset-1">
                                <label for="mobile" class=" col-sm-2 col-form-label">Mobile No:</label>
                                <input type="tel" id="mobile" name="mobile" required /><br />
                            </div>
                            <br />
                            <div class="form-group row col-sm-offset-1 ">
                                <label for="dob" class=" col-sm-2 col-form-label">DOB:</label>
                                <input type="date" id="dob" name="dob" value="" required aria-required="true" style="width: 185px;" />
                            </div>
                            <br />
                            <div class="button form-group row col-sm-offset-1">
                                <label class=" col-sm-2 col-form-label">Gender:</label><br><br>
                                <div class="col-xs-offset-1 col-xs-2">
                                    <input type="radio" id="male" name="gender" value="male" />
                                    <label for="male"> Male </label><br />
                                    <input type="radio" id="female" name="gender" value="female" />
                                    <label for="female"> Female</label><br />
                                    <input type="radio" id="other" name="gender" value="other" />
                                    <label for="other"> Other</label><br />
                                    <br />
                                </div>
                            </div>
                            <div class="form-group row col-sm-offset-1">
                                <label for="address" class="col-sm-2 col-form-label">Address:</label>
                                <input type="text" id="address" name="address" value="" required aria-required="true" /><br />
                            </div>
                            <br />
                            <div class="form-group row col-sm-offset-1">
                                <label class=" col-sm-2 col-form-label">City:</label>
                                <select name="city">
                                    <option value="hyderabad">hyderabad</option>
                                    <option value="kolkata">kolkata</option>
                                    <option value="chennai">chennai</option>
                                    <option value="bangalore">bangalore</option>
                                    <option value="patna">patna</option>
                                    <option value="Others">Others</option>
                                </select>
                                <br />
                                <br />
                            </div>
                            <div class="form-group row col-sm-offset-1">
                                <label for="psw" class="col-sm-2 col-form-label">Password:</label>
                                <input type="password" id="psw" name="psw" value="" required aria-required="true" /><br />
                            </div>
                            <br />
                            <div class="form-group row col-sm-offset-1">
                                <label for="qn1" class="col-sm-2 col-form-label">Question 1:</label>
                                <input type="text" id="qn1" name="qn1" value="" required aria-required="true" /><br />
                            </div>
                            <br />
                            <div class="form-group row col-sm-offset-1">
                                <label for="qn2" class="col-sm-2 col-form-label">Question 2:</label>
                                <input type="text" id="qn2" name="qn2" value="" required aria-required="true" /><br />
                            </div>
                            <br />
                            <div class="form-group row col-sm-offset-1">
                                <label for="qn3" class="col-sm-2 col-form-label">Question 3:</label>
                                <input type="text" id="qn3" name="qn3" value="" required aria-required="true" /><br />
                            </div>
                            <br />
                            <div class="form-group row col-sm-offset-1">
                                <label for="ans1" class="col-sm-2 col-form-label">Answer 1:</label>
                                <input type="text" id="ans1" name="ans1" value="" required aria-required="true" /><br />
                            </div>
                            <br />
                            <div class="form-group row col-sm-offset-1">
                                <label for="ans2" class="col-sm-2 col-form-label">Answer 2:</label>
                                <input type="text" id="ans2" name="ans2" value="" required aria-required="true" /><br />
                            </div>
                            <br />
                            <div class="form-group row col-sm-offset-1">
                                <label for="ans3" class="col-sm-2 col-form-label">Answer 3:</label>
                                <input type="text" id="ans3" name="ans3" value="" required aria-required="true" /><br />
                            </div>
                            <br />
                            <input type="hidden" name="_token" value="{{csrf_token()}}"><br />
                            <div class="col-xs-12 col-xs-offset-0 col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-primary text-center btn-lg col-md-5">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </section>
        </div>
    </div>
</body>

</html>