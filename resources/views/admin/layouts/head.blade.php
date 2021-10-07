 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>@yield('title')</title>
 <!-- Tell the browser to be responsive to screen width -->
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

 {{-- csrf protection --}}
 {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
 <meta name="_token" content="{{ csrf_token() }}"/>


 <!-- Bootstrap 3.3.6 -->
 {{-- <link rel="stylesheet" href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}"> --}}
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
     integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 <link rel="stylesheet" href="{{ asset('admin/dist/css/skins/_all-skins.min.css') }}">

 <link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
 <!-- Theme style -->
 <link rel="stylesheet" href="{{ asset('admin/dist/css/AdminLTE.min.css') }}">
 <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
 {{-- <link rel="stylesheet" href="{{ asset('admin/css/animateme.css') }}"> --}}

 @section('headSection')
 @show

 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
 {{-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=2gub9al0ldt0eozuliq6xyzda6xxot10w7lanj6pk2dvqs52"></script> --}}
 <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
 <script>
    //  $(document).ready(function() {
    //      // alert('rgrfgdhru');

    //      // });
    //      var count = 1;

    //      dynamic_field(count);

    //      function dynamic_field(number) {
    //          html = '<tr>';
    //          html += '<td><input type="text" name="first_name[]" class="form-control" /></td>';
    //          html += '<td><input type="text" name="last_name[]" class="form-control" /></td>';
    //          if (number > 1) {
    //              html +=
    //                  '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
    //              $('#variants').append(html);
    //          } else {
    //              html +=
    //                  '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
    //              $('#variants').html(html);
    //          }
    //      }

    //      $(document).on('click', '#add', function() {
    //          count++;
    //          dynamic_field(count);
    //      });

    //      $(document).on('click', '.remove', function() {
    //          count--;
    //          $(this).closest("tr").remove();
    //      });

    //      $('#dynamic_form').on('submit', function(event) {
    //          event.preventDefault();
    //          $.ajax({
    //              url: '{{-- route('dynamic-field.insert') --}}',
    //              method: 'post',
    //              data: $(this).serialize(),
    //              dataType: 'json',
    //              beforeSend: function() {
    //                  $('#save').attr('disabled', 'disabled');
    //              },
    //              success: function(data) {
    //                  if (data.error) {
    //                      var error_html = '';
    //                      for (var count = 0; count < data.error
    //                          .length; count++) {
    //                          error_html += '<p>' + data.error[count] + '</p>';
    //                      }
    //                      $('#result').html('<div class="alert alert-danger">' +
    //                          error_html + '</div>');
    //                  } else {
    //                      dynamic_field(1);
    //                      $('#result').html('<div class="alert alert-success">' +
    //                          data.success + '</div>');
    //                  }
    //                  $('#save').attr('disabled', false);
    //              }
    //          })
    //      });
    //  });


// tinymce.init({
//     selector: 'textarea',
//     menubar: 'false',
//     branding: 'false',
//     entity_encoding: 'raw',
//     force_br_newlines: 'true',
//     force_p_newlines: 'false',
//     forced_root_block: '',
//     {{-- Needed for 3.x, --}}
//     plugins: [
//         'advlist autolink lists link charmap print preview anchor textcolor',
//         'searchreplace visualblocks code fullscreen',
//         'table contextmenu paste code help'
//     ],
//     toolbar: 'undo redo | link | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
//     setup: function(editor) {
//         editor.on('change', function(e) {
//             editor.save();
//         });
//     }
// });
 </script>
