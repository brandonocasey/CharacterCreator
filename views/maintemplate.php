<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $viewModel->get('pageTitle'); ?></title>
    <link rel="stylesheet" href=<?php echo '"' . $viewModel->get('css') . '"'; ?> type="text/css">
    <script href=<?php echo '"' . $viewModel->get('js') . '"'; ?>></script>
</head>
<body>
<?php require($this->viewFile); ?>
</body>
</html>
