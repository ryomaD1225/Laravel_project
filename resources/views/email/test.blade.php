<body>
    テスト送信の本文

{{ $contact }}
<img src="data:image/png;base64,{{ $contact }}">
<img src="data:image/png;base64, ' . $contact . '">
</body>

