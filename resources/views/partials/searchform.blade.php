<div id="pos_search_top" class="row">
    <h3 align="center">{{__('page.totalresults')}} : <span id="total_records"></span></h3>
    <form type="get" action="{{route('findproducts')}}" class="form">
        <div id="searchbox" class="form_search">
            <label for="pos_query_top"></label>
            <input class="search_query form-control ac_input" type="text" placeholder="Αναζήτηση προϊόντων..."
                id="search" name="searchname" value="" autocomplete="off" />
            <button type="submit" name="submit_search" class="btn btn-default search_submit">
                <i class="icon-search"></i><span>Αναζήτηση</span>
            </button>
        </div>
    </form>
</div>


<div class="position-relative">
<ul id="searchresults" class="w-100 position-absolute list-group" style="z-index: 999999999">
<div id="link"></div>
</ul>
</div>

@section('scripts')

<script>
    $(document).ready(function(){

     fetch_customer_data();

     function fetch_customer_data(query = '')
     {
      $.ajax({
       url:"{{ route('search') }}",
       method:'GET',
       data:{query:query},
       dataType:'json',
       success:function(data)
       {
        var $subtype = $('#link');
        $('#searchresults').html(data.table_data);
        $.each(data, function(value) {
                            $subtype.html('<a href="' + value.id + '">' + value
                                .title + '</a>');
                        });
        $('#total_records').text(data.total_data);
       }
      })
     }

     $(document).on('keyup', '#search', function(){
      var query = $(this).val();
      fetch_customer_data(query);
     });

    });
    </script>
@endsection
