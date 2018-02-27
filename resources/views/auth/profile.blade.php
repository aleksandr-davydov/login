<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
                            <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>


            <br>

                <script type="text/javascript">
                    function getDate()
                    {
                        var date = new Date();
                        var year = date.getFullYear();
                        var month = date.getMonth();
                        var day = date.getDay();
                        var hours = date.getHours();
                        var minutes = date.getMinutes();
                        var seconds = date.getSeconds();
                        if (month < 10)
                        {
                            month = '0' + month;
                        }
                        if (day < 10)
                        {
                            day = '0' + day;
                        }
                        if(seconds < 10)
                        {
                            seconds = '0' + seconds;
                        }
                        document.getElementById('timedisplay').innerHTML = day + '/' + month + '/' + year + "<br>" + hours + ':' + minutes + ':' + seconds;
                    }
                setInterval(getDate, 0);
            </script>

            <div id="timedisplay"></div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">{{Auth::user()-> name}}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                       <div class=" col-md-10 col-lg-10 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr><td>Department:</td><td>Programming</td>
                                </tr><tr><td>Hire date:</td><td>06/23/2013</td>
                                </tr>

                                </tbody>
                            </table>

                       </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                    <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>

                        </span>
                </div>

            </div>
        </div>
    </div>
</div>