@extends('frontend.layouts.app')

@section('content')
<section class="block">
    <div class="container agnet-prop">
        <div class="row">
            <aside class="col-md-4 column">
                <div class="agent_bg_widget widget">
                    <div class="agent_widget">
                        <div class="agent_pic">
                            <a href="agent.html" title="">
                                <img src="{{ url('frontend/img/demo/man1.jpg')}}" alt="" />
                                <h3>Smith forbes</h3>
                            </a>
                        </div>
                        <div class="agent_social">
                            <a href="#" title=""><i class="fa fa-facebook"></i></a>
                            <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                            <a href="#" title=""><i class="fa fa-twitter"></i></a>
                            <a href="#" title=""><i class="fa fa-tumblr"></i></a>
                        </div>

                        <span>
                            <i class="fa fa-phone"> </i> +1 9090909090
                        </span>
                        <span>
                            <i class="fa fa-envelope"> </i> agent@company.com
                        </span>
                        <ul class="agent-menu">
                            <li>
                                <a href=""><i class="fa fa-user"> </i> My Profile </a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-home"> </i> My vehiculs </a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-sign-out"> </i> Log-out </a>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="package_widget widget">
                    <div class="heading2">
                        <h3>Your Current Package</h3>
                    </div>
                    <div class="package-content">
                        <p><strong>Free Membership</strong></p>
                        <p>Listing included:&nbsp;3</p>
                        <p>Listing remain:&nbsp;1</p>
                        <p>Featured included:&nbsp;1</p>
                        <p>Featured remain:&nbsp;1</p>
                        <p>Ends On:&nbsp;Never</p>
                    </div>
                </div>

                <div class="pass_pro_widget widget">
                    <div class="heading2">
                        <h3>Change Your Plan</h3>
                    </div>
                    <div class="plan-content">
                        <form class="subscription_post">
                            <div class="form-message">
                            </div>
                            <div class="form-group">
                                <div class="dropdown label-select">
                                    <select class="form-control">
                                        <option>Plus Plan</option>
                                        <option>Premium Plan</option>
                                        <option>Basic Plan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="recurring_payment" class="checkbox-label">
                                    <input id="recurring_payment" name="recurring_payment" value="1" type="checkbox">
                                    Make Payment Recurring
                                </label>
                            </div>
                            <div class="">
                                <input class="btn btn-success" value="PAY WITH PAYPAL" type="submit">
                            </div>
                            <div class="package-info">
                                or&nbsp;
                                <a href="#">View more detail</a>
                            </div>
                        </form>
                    </div>
                </div>
            </aside>

            <div class="col-md-8 column">
                <div class="heading4">
                    <h2>MY PROFILE</h2>
                </div>

                <div class="submit-content">
                    <form id="profile_form" name="profile_form" class="form profile-form">
                        <div class="control-group">
                            <div class="group-title">Welcome back, Kimaro Kyoto</div>
                            <div class="group-container row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group s-profile-title">
                                                <label for="title">Name&nbsp;*</label>
                                                <input id="title" class="form-control" value="{{$user->name}}"
                                                    name="title" required="" type="text">
                                            </div>
                                            <div class="form-group s-profile-phone">
                                                <label for="phone">Phone</label>
                                                <input id="phone" class="form-control" value="{{$user->phone}}"
                                                    name="phone" type="text">
                                            </div>
                                            <div class="form-group s-profile-email">
                                                <label for="email">Email&nbsp;*</label>
                                                <input id="email" class="form-control" value="{{$user->email}}"
                                                    name="email" required="" type="text">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="desc">About me</label>
                                    <textarea id="desc" class="form-control" name="desc"
                                        rows="8">Kimaro kyoto He did this without coming from another Manhattan firm. The instinct that drove him to form Elegran was a strong vision and passion to create a workplace atmosphere of generosity and teamwork. Similarly, he committed himself to a basis where the people would be more important than the company's bottom line. His penchant for providing exceptional service to his clients coupled with a cutting-edge knowledge of the industry has provided Elegran's agents with a strong foundation to succeed in their own goals of making clients' real estate dreams into reality. Moreover, Doe realized that there was a real demand for a non-pressured, honest atmosphere where agents could thrive without the everyday workplace politics. Doe also envisioned a workplace in which people would feel at home, clients' interests would be put first and innovative strategies using technology would be utilized in servicing clients' and agents' needs. We believe that this ongoing mission combined with a commitment to industry ethics, selflessness and our select team of knowledgeable agents can change the real estate industry for the better. Prior to Elegran, Doe gained his industry experience in wholesale mortgage banking. He quickly rose to the top of his field at the age of 27, producing in the top 1% industrywide. Close to his exit from that field, Doe was known for implementing new underwriting methods, which brought his team to be the most profitable in the Northeast. Today, Doe and the Elegran team have made their mark; they have earned a respectable presence in the most competitive Real Estate market in the world. His team has experienced exponential growth from the formative days, and they continue to succeed. Agents who work at Elegran continually boast about the office and our "family" atmosphere. Residing for over a decade in the NYC area and a native of Williamsville, New York, Doe went to college in upstate New York, the University of Hawaii and The London School of Economics, majoring in both Business and Economics. Doe spends most of his free time with his family and enjoys reading, travel, music and sporting events.</textarea>
                                </div>
                            </div>

                        </div>
                        <div class="control-group">
                            <div class="group-title">My Reservations</div>
                            <div class="group-container row">
                                <div class="col-md-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>user_id</th>
                                                <th>date from</th>
                                                <th>date to</th>
                                                <th>total</th>
                                                <th>payment type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user->bookings as $key=> $row)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$row->user_id}}</td>
                                                    <td>{{explode(' ',$row->date_from)[0]}}</td>
                                                    <td>{{explode(' ',$row->date_to)[0]}}</td>
                                                    <td>{{$row->total}}</td>
                                                    <td>{{$row->payment_type}}</td>

                                                    <td>
                                                        {!!Form::Open(['url'=>'admin/reservations/destroy/'.$row->id])!!}
                                                        <button class="btn btn-success">Delete</button>
                                                        {!!Form::Close()!!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="submit">
                                    <input class="btn flat-btn" id="profile_submit" value="Update" type="submit">
                                </div>
                            </div>
                        </div>
                </div>
                </form>
                <form id="password_form" name="password_form" class="form profile-form">
                    <div class="control-group">
                        <div class="group-title">
                            Change Password</div>
                        <div class="group-container row">
                            <div class="form-message">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group s-profile-old_pass">
                                    <label for="old_pass">Old Password</label>
                                    <input id="old_pass" class="form-control" value="" name="old_pass" type="password">
                                </div>
                                <div class="form-group s-profile-new_pass">
                                    <label for="new_pass">New Password</label>
                                    <input id="new_pass" class="form-control" value="" name="new_pass" type="password">
                                </div>
                                <div class="form-group s-profile-new_pass_confirm">
                                    <label for="new_pass_confirm">Confirm New Password</label>
                                    <input id="new_pass_confirm" class="form-control" value="" name="new_pass_confirm"
                                        type="password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="submit">
                                    <input class="btn flat-btn" id="password_submit" value="Change Password"
                                        type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>
</section>
@stop
