<?php $valor = 0.0 ?>
         @foreach(session('cart') as $id => $detalle)
         <?php $valor += $detalle['precio'] * $detalle['cantidad'] ?>
         @endforeach
<div class="text-center">
    <h2>Tu compra:</h2>
    <table class="table table-striped table-bordered">
        <body>
            <tr>
                <th>Subtotal</th>
                <td id="subtotal">{{$valor}}</td>
            </tr>
            <tr>
                <th>Envío</th>
                <td>$100.00</td>
            </tr>
            <tr>
                <th>Total</th>
                <td id="total">${{$valor + 100}}</td>
            </tr>
        </tbody>
    </table>
</div>