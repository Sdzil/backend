
    <!-- page css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <!-- datatable cdn -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">



    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

        td {

            /* border: black 1px solid; */
            margin: 2px;
        }

        table {
            padding: 10px;
            /* background-color: tomato; */
        }

        tbody {
            /* border: unset; */
        }
    </style>

    <title>datatable</title>
</head>

<body>

    <h1>後端管理-最新消息</h1>
    <br>
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>sub_title</th>
                <th>content</th>
                <th>image_url</th>
                <!-- <th>Column 2</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($news_list_all as $news)
                <tr>
                    <td>
                        {{$news->id}}
                    </td>
                    <td>
                        {{$news->title}}
                    </td>
                    <td>
                        {{$news->sub_title}}
                    </td>
                    <td>
                        {{$news->content}}
                    </td>
                    <td>
                        {{$news->image_url}}
                    </td>
                </tr>
                @endforeach
        </tbody>

    </table>

    {{-- <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script> --}}

    <script>
        // for (let i = 0; i < 50; i++) {
        //     // $('tbody').append(`<tr role="row" class="odd"><td >Row ${i}</td></tr>`);
        // }




        $(document).ready(function () {
            $('#table_id').DataTable();
        });


    </script>



</body>
