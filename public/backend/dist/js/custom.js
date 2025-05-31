$(function () {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    setTimeout(function() {  $(".alert-success").stop().slideUp(500);   }, 5000);
    setTimeout(function() {  $(".alert-danger").stop().slideUp(500);   }, 5000);
    setTimeout(function() {  $(".alert-warning").stop().slideUp(500);   }, 5000);

    /** add active class and stay opened when selected */
    var url = window.location;

    // for sidebar menu entirely but not cover treeview
    $('ul.nav-sidebar a').filter(function() {
      return this.href == url;
    }).addClass('active');

    // for treeview
    $('ul.nav-treeview a').filter(function() {
      return this.href == url;
    }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');

    // Summernote
    $('#summernote').summernote({
        height: 150,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'italic', 'underline', 'clear']],
          ['fontname', ['fontname']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['insert', ['link']],
          ['view', ['codeview']]
        ],
        fontSizes: ['12', '13', '14', '16', '18', '20', '24', '28', '32', '36'],
    });

    $('#summernote1, #summernote2, #summernote3').summernote({
        height: 150,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'italic', 'underline', 'clear']],
          ['fontname', ['fontname']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link']],
          ['view', ['codeview']]
        ],
        fontSizes: ['12', '13', '14', '16', '18', '20', '24', '28', '32', '36'],
    });
});

$(document).on('click', '.delete-confirmation', function(event) {
    event.preventDefault();
    var form = $(this).closest("form");

    swal({
        title: "Are you sure to delete?",
        text: "You will not be able to recover this record!",
        icon: "warning",
        buttons: ["No, cancel!", "Yes, delete it!"],
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            form.submit();
        }
    });

    return false;
});
