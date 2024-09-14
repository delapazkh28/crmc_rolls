$('#add_teachers').show();
$('#add_students').hide();
$('#add_programs').hide();
$('#add_course_subs').hide();

$(document).ready(function(){

    /* Tables */

    $("#role").change(function(){
      var role = $("#role").find(":selected").text();
      
      if(role == "Student"){
           $("#disp_course").removeClass("dontshow"); 
      }else{
         $("#disp_course").addClass("dontshow"); 
      }

    });
   
//     $("#depts").change(function(){
      
//       // alert($("#depts").val());
//       var deptid = $("#depts").val();
//       $("#depts").find("option").each(function(){

//          var $this = $(this);
//          if($this.attr('id') == deptid){
//             $this.attr('selected', 'selected');
//             if($this.attr('id') != deptid){
//                $this.removeAttr("selected");
//             }
//             return false;
//          }
//       });
     
//  });

    $('.dtable').DataTable();

    /* account creation */
    

   
   var quill = new Quill('#editor', {
        theme: 'snow'
      });




      $("#add_teachers_link").click(function() {
         $('#add_teachers').show();
         $('#add_students').hide();
         $('#add_programs').hide();
         $('#add_course_subs').hide();
      });
      $("#add_students_link").click(function() {
         $('#add_teachers').hide();
         $('#add_students').show();
         $('#add_programs').hide();
         $('#add_course_subs').hide();
      });
      $("#add_programs_link").click(function() {
         $('#add_teachers').hide();
         $('#add_students').hide();
         $('#add_programs').show();
         $('#add_course_subs').hide();
      });
      $("#add_course_subs_link").click(function() {
         $('#add_teachers').hide();
         $('#add_students').hide();
         $('#add_programs').hide();
         $('#add_course_subs').show();
      });

      



});

