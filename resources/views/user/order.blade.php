@extends('layouts.templateOrder')

@section('headerOrder')
<link rel="stylesheet" href="{{ asset('css/dashboardOrder.css') }}">
<style>
    body {
        font-family: Ubuntu;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .table-container {
        padding: 20px;
        /* Add padding around the table container */
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        border-radius: 5px;
        overflow: hidden;
    }

    table thead {
        background-color: #007bff;
        color: #fff;
        text-align: left;
    }

    table th,
    table td {
        padding: 15px;
        text-align: left;
    }

    table th {
        background-color: #0056b3;
    }

    table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    table tbody tr:last-of-type {
        border-bottom: 2px solid #007bff;
    }

    .pay-now-btn {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .pay-now-btn:hover {
        background-color: #218838;
    }

    .popupprint {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        z-index: 1000;
    }

    .popupprint h2 {
        margin-top: 0;
    }

    .popupprint .logo {
        cursor: pointer;
        width: 20px;
        height: 20px;
    }

    .popupprint form {
        margin-top: 20px;
    }

    .popupprint form input[type="file"] {
        margin-bottom: 10px;
    }

    .popupprint form button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .popupprint form button:hover {
        background-color: #0056b3;
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 999;
        display: none;
    }
</style>
@endsection

@section('isiInformasiOrder')

@php
$order = request()->get('order', 'asc');
@endphp

<div class="overlay"></div>
<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>
                    <a href="{{ request()->fullUrlWithQuery(['order' => ($order == 'asc') ? 'desc' : 'asc']) }}">
                        Tanggal Pesan
                    </a>
                </th>
                <th>Jam</th>
                <th>Nama</th>
                <th>Order</th>
                <th>Harga</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tableorderprintuser as $op)
            <tr>
                <td>{{ $op->tanggal_pesan }}</td>
                <td>{{ $op->jam_pesan }}</td>
                <td>{{ $op->nama }}</td>
                <td>{{ $op->order }}</td>
                <td>{{ $op->harga }}</td>
                <td>
                    @if ($op->status == 'waiting')
                    {{ $op->status }}
                    @elseif ($op->status == 'payment')
                    <button type="button" class="pay-now-btn" data-order-id="{{ $op->id_orderprint }}">Pay Now</button>
                    @else
                    {{ $op->status }}
                    @endif
                </td>
            </tr>

            <div id="popup{{ $op->id_orderprint }}" class="popupprint" style="display: none;">
                <div>
                    <h2>Order Information</h2>
                    <button onclick="closePopup('{{ $op->id_orderprint }}')">
                        <img class="logo" src="{{ URL::to('img/x.svg') }}" />
                    </button>
                </div>
                <div>
                    <h4>Kontak (WhatsApp)</h4>
                    <div>
                        <h4>{{ $op->kontak }}</h4>
                    </div>
                </div>
                <div>
                    <h4>Nama</h4>
                    <div>
                        <h4>{{ $op->nama }}</h4>
                    </div>
                </div>
                <div>
                    <h4>Harga</h4>
                    <div>
                        <h4>{{ $op->harga }}</h4>
                    </div>
                </div>
                <form id="acceptForm" action="{{ route('accept-print', ['id' => $op->id_orderprint]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file_resi" required>
                    <div>
                        <button type="submit">Accept</button>
                    </div>
                </form>

                <form id="declineForm" action="{{ route('decline-order', ['id' => $op->id_orderprint]) }}" method="post">
                    @csrf
                    <button type="submit" onclick="return confirm('Are you sure you want to decline this order?')">Decline</button>
                </form>
            </div>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    document.querySelectorAll('.pay-now-btn').forEach(button => {
        button.addEventListener('click', function() {
            const orderId = this.getAttribute('data-order-id');
            showPopup(orderId);
        });
    });

    function showPopup(orderprintId) {
        document.querySelector('.overlay').style.display = 'block';
        var popup = document.getElementById('popup' + orderprintId);
        popup.style.display = 'block';
    }

    function closePopup(orderprintId) {
        document.querySelector('.overlay').style.display = 'none';
        var popup = document.getElementById('popup' + orderprintId);
        popup.style.display = 'none';
    }
</script>

@endsection