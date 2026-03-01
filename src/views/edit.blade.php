<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
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
        .btn-update {
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
        .btn-update:hover { background-color: #00cc66; }
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
    </style>
</head>
<body>
    <div class="container">
        <h1>⟨ EDIT STUDENT ⟩</h1>
        <div class="form-box">
            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf @method('PUT')

                <label>NAME</label>
                <input type="text" name="name" value="{{ old('name', $student->name) }}">

                <label>EMAIL</label>
                <input type="email" name="email" value="{{ old('email', $student->email) }}">

                <label>PHONE</label>
                <input type="text" name="phone" value="{{ old('phone', $student->phone) }}">

                <button type="submit" class="btn-update">UPDATE STUDENT</button>
            </form>
        </div>
        <a href="{{ route('students.index') }}" class="btn-back">← BACK TO LIST</a>
    </div>
</body>
</html>