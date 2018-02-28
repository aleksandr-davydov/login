<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

            <br>
            <script type="text/javascript">
                function getDate() {
                    var date = new Date();
                    var year = date.getFullYear();
                    var month = date.getMonth();
                    var day = date.getDay();
                    var hours = date.getHours();
                    var minutes = date.getMinutes();
                    var seconds = date.getSeconds();
                    if (month < 10) {
                        month = '0' + month;
                    }
                    if (day < 10) {
                        day = '0' + day;
                    }
                    if (minutes < 10) {
                        minutes = '0' + minutes;
                    }
                    if (seconds < 10) {
                        seconds = '0' + seconds;
                    }
                    document.getElementById('timedisplay').innerHTML = day + '/' + month + '/' + year + "<br>" + hours + ':' + minutes + ':' + seconds;
                }

                setInterval(getDate, 0);
            </script>

            <div id="timedisplay"></div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Profile of user {{Auth::user()-> name}}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class=" col-md-10 col-lg-10 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>Email:</td>
                                    <td>{{Auth::user()-> email}}</td>
                                </tr>
                                <tr>
                                    <td>Gender:</td>
                                    <td>{{Auth::user()-> gender}}</td>
                                </tr>
                                <tr>
                                    <td>Age:</td>
                                    <td>{{Auth::user()-> age}}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <span class="pull-left">
                           <button class="btn btn-info btn-lg" type="button" data-toggle="modal" data-target="#myModal">Edit</button>
                        <div id="myModal" class="modal fade">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header"><button class="close" type="button"
                                                              data-dismiss="modal">×</button>
                            <h4 class="modal-title">Edit profile of {{Auth::user()-> name}}</h4>
                            </div>
                             <p><b>Name:</b><br>
                               <input type="text" size="40">
                              </p>
                                 <p><b>Gender:</b><br>
                               <input type="text" size="40">
                              </p>
                                 <p><b>Age:</b><br>
                               <input type="text" size="40">
                              </p>
                            <div class="modal-footer"><button class="btn btn-default" type="submit"
                                                              data-dismiss="modal">Save</button></div>
                            </div>
                            </div>
                            </div>
                        </span>
                </div>

            </div>
        </div>
    </div>
</div>