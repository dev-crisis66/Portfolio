<footer>

</footer>
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<script src="../scripts/script.js"></script>
<?= file_exists("scripts/" . strtolower($webPage ?? "----")) ? "<script src=../scripts/" . strtolower($webPage ?? "----") . ".js></script>" : ""; ?>
</body>

</html>