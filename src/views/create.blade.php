<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background-color: #0a0a0a;
            color: #00ff88;
            font-family: 'Courier New', monospace;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 40px 20px;
        }
        .container { width: 100%; max-width: 550px; }
        h1 {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 30px;
            color: #00ff88;
            text-shadow: 0 0 10px #00ff88;
            letter-spacing: 3px;
        }
        .form-box {
            border: 1px solid #00ff88;
            padding: 36px;
            background-color: #050f08;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-size: 0.85rem;
            letter-spacing: 2px;
            color: #00cc66;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px 14px;
            margin-bottom: 20px;
            background-color: #0a0a0a;
            border: 1px solid #00ff88;
            color: #00ff88;
            font-family: 'Courier New', monospace;
            font-size: 1rem;
            outline: none;
            transition: border 0.3s;
        }
        input:focus { border-color: #ffffff; }
        .btn-save {
            width: 100%;
            padding: 12px;
            background-color: #00ff88;
            color: #0a0a0a;
            border: none;
            font-size: 1rem;
            font-family: 'Courier New', monospace;
            font-weight: bold;
            letter-spacing: 2px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .btn-save:hover { background-color: #00cc66; }
        .btn-back {
            display: block;
            text-align: center;
            margin-top: 16px;
            color: #00ff88;
            text-decoration: none;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }
        .btn-back:hover { text-decoration: underline; }
        .errors {
            background-color: #1a0000;
            border-left: 4px solid #ff4444;
            padding: 10px 16px;
            margin-bottom: 20px;
        }
        .errors li { color: #ff4444; font-size: 0.9rem; list-style: none; }
    </style>
</head>
<body>
    <div class="container">
        <h1>⟨ ADD STUDENT ⟩</h1>
        <div class="form-box">
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <label>NAME</label>
                <input type="text" name="name" value="{{ old('name') }}">

                <label>EMAIL</label>
                <input type="email" name="email" value="{{ old('email') }}">

                <label>PHONE</label>
                <input type="text" name="phone" value="{{ old('phone') }}">

                <button type="submit" class="btn-save">SAVE STUDENT</button>
            </form>

            @if($errors->any())
                <div class="errors" style="margin-top:16px">
                    <ul>@foreach($errors->all() as $e)<li>⚠ {{ $e }}</li>@endforeach</ul>
                </div>
            @endif
        </div>
        <a href="{{ route('students.index') }}" class="btn-back">← BACK TO LIST</a>
    </div>
</body>
</html>