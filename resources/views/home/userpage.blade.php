<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/love.png" type="">
      <title>Aung Chan Production</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   </head>
   <body>
      <div class="hero_area">
        @include('home.header')
        @include('home.slider')
      </div>
        @include('home.why');
      
        @include('home.new_arrival');
      
        @include('home.product');

        <!-- Comment and reply system starts here -->

        <div style="text-align:center;">

            <h1 style="font-size:30px ; text-align:center; padding-top:20px; 
            padding-bottom:20px; " >Comments</h1>

            <form action="{{url('add_comment')}}" method="POST" >

               @csrf

               <textarea style="height: 150px ; width: 600px; " placeholder="Comment something here"
               name="comment" ></textarea>

               <br>

               <input type="submit" class="btn btn-primary" value="comment"/>

            </form>

        </div>

        <div style="padding-left:20% ;" >

            <h1 style="font-size:20px; padding-bottom:20px; " >All Comments</h1>

            @foreach($comment as $comment)
            <div>
               
               <b>{{$comment->name}}</b>
               <p>{{$comment->comment}}</p>
               
               <a style="color:blue ;" href="javascript::void(0);" onclick="reply(this)" 
               data-Commentid="{{$comment->id}}" >Reply</a>

            </div>

            @foreach($reply as $rep)

            @if($rep->comment_id==$comment->id)

            <div style="padding-left:3%; padding-bottom:5px; padding-top:10px;">

               <b>{{$rep->name}}</b>
               <p>{{$rep->reply}}</p>

               <a style="color:blue ;" href="javascript::void(0);" onclick="reply(this)" 
               data-Commentid="{{$comment->id}}" >Reply</a>

            </div>

            @endif

            @endforeach

            @endforeach

            <!-- Reply Textbox -->

            <div style="display: none ;" class="replyDiv" >

               <form action="{{url('add_reply')}}" method="POST" >

                  @csrf

                  <input type="text" id="commentId" name="commentId" hidden="" />
                  <textarea style="height:100px;width:500px;" name="reply" placeholder="Write something here" ></textarea>

                  <br>

                  <button type="submit" class="btn btn-primary">Reply</button>

                  <a href="javascript::void(0)" class="btn" onclick="reply_close(this)">Close</a>

               </form>

            </div>

        </div>




        <!-- Comment and reply system ends here -->
     
        @include('home.footer');

      <div class="cpy_">
         <p class="mx-auto">?? 2021 All Rights Reserved By <a href="">Aung Chan</a><br>
         
            Distributed By <a href="" target="_blank">ACM</a>
         
         </p>
      </div>

      <!-- this is javascript for reply -->
      <script type="text/javascript">
         
         function reply(caller)
         {
            document.getElementById('commentId').value=$(caller).attr('data-Commentid');

            $('.replyDiv').insertAfter($(caller));

            $('.replyDiv').show();
         }

         function reply_close(caller)
         {
            $('.replyDiv').hide();
         }

     </script>

   <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
   </script>

      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>