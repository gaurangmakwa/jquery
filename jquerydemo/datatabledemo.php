<html>
    <body>
        <script src="jquery-3.6.1.js"></script>
        <script src="jquery.dataTables.js"></script>
        <link href="jquery.dataTables.css" rel="stylesheet" type="text/css"/>
        <script>
            $(document).ready(function (){
                $('#myTable').DataTable();
            });
        </script>

        <table id="myTable">
            <thead>
                <tr>
                    <td>id</td>
                    <td>name</td>
                    <td>mobile</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>akash padhiyar</td>
                    <td>9722821654</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>akash infotech</td>
                    <td>9722821654</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>php</td>
                    <td>9722821654</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>java</td>
                    <td>9722821654</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>ios</td>
                    <td>9722821654</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>