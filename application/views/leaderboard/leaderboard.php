<div class="container">
      <div class="row">
        <div class="col-sm-2 hidden-sm hidden-xs">
          <a href="<?= base_url()?>"> 
            <img src="<?= base_url('assets/images/impossible_quiz.png') ?>" alt=""/>
          </a> 
          <span class="text-muted"><i></i></span>
        </div>
        <div class="col-sm-10">
          <p><b>Leaderboard</b></p>
           <table class="table table-hover table-condensed">
            <thead>
              <tr>
                <th>
                 <b> Rank</b>
                </th>
                <th>
                   <b>Username</b>
                </th>               
                <th>
                    <b>Date</b>
                </th>
              </tr>
            </thead>
            <tbody>
               <tr id="leaderboard_row">
                <td>1</td>
                <td>test</td>
                <td>10</td>
               </tr>
            </tbody>
          </table>

          <!-- <div class="panel panel-default">
            <div class="panel-heading">Legend</div>
            <div class="panel-body">

              <p>A value of -1 indicates that the assignment file was found but
                contained invalid content.</p>

              <p>The <span class="text-success">oracle (best possible)</span>, <span class="text-danger">default</span> and 
                <span class="text-warning">baseline (minimum performance for a B)</span> lines are
                highlighted.
              </p>
            </div>
          </div> -->

        </div>
      </div>

      <!-- <footer class="text-center text-muted">
        <hr/>
        Last updated May 09, 2014.<br/>
        Created with 
        <a href="http://git-scm.com/">git</a>,
        <a href="http://jekyllrb.com">jekyll</a>,
        <a href="http://getbootstrap.com/">bootstrap</a>,
        and <a href="http://www.gnu.org/s/emacs/">emacs</a>.<br/> 
        Feel free to reuse the 
        <a href="https://github.com/mjpost/leaderboard">source code</a> <i class="fa fa-github-alt"></i>.<br/>
        <br/><br/>
      </footer> -->
    </div>

    <!-- Page content of course! -->
    <!-- JS and analytics only. -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      $("#leaderboard").addClass("active");
      });
    </script>