<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background-color: #0a0a0a;
            color: #00ff88;
            font-family: 'Courier New', monospace;
            display: flex;
            justify-content: center;
            padding: 40px 20px;
        }
        .container { width: 100%; max-width: 900px; }
        h1 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 30px;
            color: #00ff88;
            text-shadow: 0 0 10px #00ff88;
            letter-spacing: 3px;
        }
        .btn-add {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 24px;
            background-color: transparent;
            border: 2px solid #00ff88;
            color: #00ff88;
            text-decoration: none;
            font-size: 1rem;
            letter-spacing: 1px;
            transition: all 0.3s;
        }
        .btn-add:hover { background-color: #00ff88; color: #0a0a0a; }
        .success {
            background-color: #003322;
            border-left: 4px solid #00ff88;
            padding: 10px 16px;
            margin-bottom: 20px;
            color: #00ff88;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 1rem;
        }
        th {
            background-color: #003322;
            color: #00ff88;
            padding: 14px 18px;
            text-align: left;
            letter-spacing: 2px;
            border-bottom: 2px solid #00ff88;
        }
        td {
            padding: 12px 18px;
            border-bottom: 1px solid #1a3a2a;
            color: #ccffdd;
        }
        tr:hover td { background-color: #001a0f; }
        .btn-edit {
            padding: 6px 16px;
            border: 1px solid #00ff88;
            color: #00ff88;
            text-decoration: none;
            font-size: 0.85rem;
            margin-right: 6px;
            transition: all 0.3s;
        }
        .btn-edit:hover { background-color: #00ff88; color: #0a0a0a; }
        .btn-delete {
            padding: 6px 16px;
            border: 1px solid #ff4444;
            color: #ff4444;
            background: transparent;
            font-size: 0.85rem;
            cursor: pointer;
            font-family: 'Courier New', monospace;
            transition: all 0.3s;
        }
        .btn-delete:hover { background-color: #ff4444; color: #0a0a0a; }
        .pagination { margin-top: 20px; text-align: center; color: #00ff88; }
    </style>
</head>
<body>
    <div class="container">
        <h1>⟨ STUDENTS LIST ⟩</h1>

        <a href="{{ route('students.create') }}" class="btn-add">+ ADD STUDENT</a>

        @if(session('success'))
            <div class="success">✔ {{ session('success') }}</div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn-edit">EDIT</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline">
                            @csrf @method('DELETE')
                            <button class="btn-delete" onclick="return confirm('Are you sure?')">DELETE</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">{{ $students->links() }}</div>
    </div>
</body>
</html>