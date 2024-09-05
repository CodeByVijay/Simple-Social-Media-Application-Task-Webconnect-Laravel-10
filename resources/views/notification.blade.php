<!-- Error Alert -->
<style>
    .custom-alert {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 4px;
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: Arial, sans-serif;
    color: #fff;
    opacity: 1;
    transition: opacity 0.6s ease;
}

.custom-alert-danger {
    background-color: #f44336; /* Red for danger alerts */
}

.custom-alert-success {
    background-color: #4CAF50; /* Green for success alerts */
}

.alert-message {
    margin-right: 20px;
    font-size: 14px;
    line-height: 1.5;
}

.close-btn {
    background: none;
    border: none;
    font-size: 20px;
    line-height: 1;
    cursor: pointer;
    color: #fff;
    padding: 0;
    margin-left: 10px;
}

.close-btn:hover {
    color: #000; /* Darker close button on hover */
}

/* Add fade-out effect */
.custom-alert.fade-out {
    opacity: 0;
    display: none;
}

</style>
@if (session('error'))
<div class="custom-alert custom-alert-danger">
    <span class="alert-message">{!! session('error') !!}</span>
    <button class="close-btn" onclick="this.parentElement.style.display='none';">&times;</button>
</div>
@endif

<!-- Success Alert -->
@if (session('success'))
<div class="custom-alert custom-alert-success">
    <span class="alert-message">{{ session('success') }}</span>
    <button class="close-btn" onclick="this.parentElement.style.display='none';">&times;</button>
</div>
@endif

