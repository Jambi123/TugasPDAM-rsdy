<!-- resources/views/tagihan.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>PERHITUNGAN PDAM</title>
    <style>
        body {
            font-family: Arial sans-serif;
            margin: 0;
            padding: 0;
            background-color: #31b1e0;
        }

        h2 {
            text-align: center;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #333;
            padding: 60px 0;
        }
        
        input[type="number"] {
            width: 95%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        

       

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #d8fff5;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: 7ed1e6;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color:#97e08a;
        }
    </style>
</head>
<body>
    <h1>Tugas PDAM</h1>
    <form action="/tagihan" method="post">
        @csrf
        <label for="gunaair">Pemakaian Air (m<sup>3</sup>)</label>
        <input type="number" id="gunaair" name="gunaair" required>
        <button type="submit">Hitung Tagihan</button>
    </form>

    @if (isset($tagihan))
        <h2>Tagihan: Rp. {{ number_format($tagihan) }}</h2>
    @endif
</body>
</html>
