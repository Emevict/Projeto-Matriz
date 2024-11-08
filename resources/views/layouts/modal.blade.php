<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    @if(session('success') || session('error') || session('warning'))
        <div class="popup center" id="notification-modal">
            <div class="title">
                @if(session('success'))
                    Sucesso
                @elseif(session('error'))
                    Erro
                @elseif(session('warning'))
                    Alerta
                @endif
            </div>
            
            <div class="description">
                {{ session('success') ?? session('error') ?? session('warning') }}
            </div>
    
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
        </div>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('notification-modal');
            modal.style.display = 'block';

            const progress = document.querySelector('.progress');
            progress.style.width = '0%';
            setTimeout(() => {
                progress.style.transition = 'width 1.4s linear';
                progress.style.width = '100%';
            }, 100);

            setTimeout(() => {
                modal.style.display = 'none';
            }, 1500); 
        });
    </script>
    @endif
</body>
</html>


<style>
    .popup {
        position: fixed;
        top: 5%;
        left: 50%;
        transform: translateX(-50%);
        padding: 10px;
        border-radius: 10px; 
        background-color: #ffffff; 
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        width: 350px;
        max-width: 90%;
        z-index: 1000;
        display: none;
        text-align: center;
    }

    .title {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .description {
        font-size: 14px;
    }

    .progress-bar {
        margin-top: 15px;
        height: 5px;
        background-color: #e0e0e0;
        border-radius: 8px;
        overflow: hidden;
    }

    .progress {
        height: 100%;
        width: 0;
        background-color: #050505;
    }
</style>
