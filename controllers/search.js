$(document).ready(function() {
    // input.keyup(function() {
      //   if(input.val() != '') {
        //     $.post("../controllers/livesearch.php", { input:input.val()}, function(data) {
          //       $("#searchresult").html(data);
          //     }) 
          //   })
          // })
  $("#live_search").keyup(function () {

    $.ajax({
      type: "POST",
      url: "../controllers/livesearch.php",
      data: {
        search: $(this).val()
      },
      cache: false,
      success: function(data) {
        $("#searchresult").html(data)
      }
    })
    // var this = $(this);
    // var input = $(this).val();
    // var input = e.this.value;
      // if(input != "") {
        // var input = e.target.value;
        // const data = (data) => {
        //   $('#searchresult').html(data)
        // }
          // $.ajax({
          //   url:"../controllers/livesearch.php",
          //   method:"POST",
            // data:{input:input},
        //     data: 

        //     success: function(data) {
        //       $("#searchresult").html(data);
        //     }
            
        //   })
        // }else {
        // input = '';
        // $("#searchresult").css("display","none");
      //   $("#searchresult").hide();
      // }
    }) 
  })