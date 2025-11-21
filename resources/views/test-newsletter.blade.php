<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Newsletter Test</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        input[type="email"] { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; }
        button { background: #0284C7; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
        button:disabled { background: #ccc; }
        .result { margin-top: 20px; padding: 15px; border-radius: 4px; }
        .success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .info { background: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; }
        pre { background: #f5f5f5; padding: 10px; overflow-x: auto; }
    </style>
</head>
<body>
    <h1>Newsletter Subscription Test</h1>
    
    <div class="info result">
        <strong>CSRF Token:</strong> {{ csrf_token() }}<br>
        <strong>API Endpoint:</strong> /api/newsletter<br>
        <strong>Method:</strong> POST
    </div>

    <form id="newsletterForm">
        <div class="form-group">
            <label>Email Address:</label>
            <input type="email" id="email" name="email" placeholder="test@example.com" required>
        </div>
        <button type="submit" id="submitBtn">Subscribe to Newsletter</button>
    </form>

    <div id="result"></div>

    <h3>Recent Subscriptions:</h3>
    <div id="subscriptions">Loading...</div>

    <script>
        // Load subscriptions count
        async function loadSubscriptions() {
            try {
                const response = await fetch('/api/newsletter-count');
                if (response.ok) {
                    const data = await response.json();
                    document.getElementById('subscriptions').innerHTML = 
                        '<div class="info result">Total: ' + (data.count || 0) + ' subscriptions</div>';
                }
            } catch (error) {
                document.getElementById('subscriptions').innerHTML = 
                    '<div class="error result">Could not load count</div>';
            }
        }

        loadSubscriptions();

        document.getElementById('newsletterForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const submitBtn = document.getElementById('submitBtn');
            const resultDiv = document.getElementById('result');
            const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
            
            console.log('Submitting email:', email);
            console.log('CSRF Token:', csrfToken);
            
            submitBtn.disabled = true;
            submitBtn.textContent = 'Subscribing...';
            resultDiv.innerHTML = '';
            
            try {
                const response = await fetch('/api/newsletter', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ email: email })
                });
                
                const result = await response.json();
                console.log('Response:', result);
                
                let html = '<div class="result ';
                html += result.success ? 'success' : 'error';
                html += '"><strong>' + (result.success ? 'SUCCESS!' : 'ERROR') + '</strong><br>';
                html += result.message + '<br><br>';
                html += '<strong>Response Details:</strong><pre>' + JSON.stringify(result, null, 2) + '</pre>';
                html += '<strong>Status Code:</strong> ' + response.status + '</div>';
                
                resultDiv.innerHTML = html;
                
                if (result.success) {
                    document.getElementById('newsletterForm').reset();
                    loadSubscriptions();
                }
            } catch (error) {
                console.error('Error:', error);
                resultDiv.innerHTML = '<div class="result error"><strong>ERROR</strong><br>' + 
                    error.message + '</div>';
            } finally {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Subscribe to Newsletter';
            }
        });
    </script>
</body>
</html>
