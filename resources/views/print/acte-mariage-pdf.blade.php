<?php ?>
<!DOCTYPE html>
<html>
<head>
    <title>www.sifec.cg</title>

    @include('print.print-page-style')

</head>
<body>

        <table style="">
            <tr style="text-align: center">
                <td><h3>Acte de mariage</h3></td>
            </tr>
            <tr style="text-align: center">
                <td style="">Acte:&nbsp; {{ $acte->numero_acte}}</td>
            </tr>
        </table>

</body>
</html>