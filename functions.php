
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    $namePattern = '/^[A-Za-z\s]+$/';
    $passwordPattern = '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/';
    $targetDirectory = "uploads/"; // Directory to store uploaded files
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
    $uploadOk = true;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, the file already exists.";
        $uploadOk = false;
    }

    // Check file size (in this example, limit to 2MB)
    if ($_FILES["file"]["size"] > 2 * 1024 * 1024) {
        echo "Sorry, your file is too large.";
        $uploadOk = false;
    }

    // Allow certain file formats (you can adjust this as needed)
    $allowedFileTypes = array("jpg", "jpeg", "png", "gif", "pdf");
    if (!in_array($fileType, $allowedFileTypes)) {
        echo "Sorry, only JPG, JPEG, PNG, GIF, and PDF files are allowed.";
        $uploadOk = false;
    }

    if ($uploadOk) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    if (preg_match($namePattern, $name) && preg_match($passwordPattern, $password)) {
        echo "Validation successful!";
echo  $name;
echo  $password;
        
        // Your code here to proceed with the valid input
    } else {
        echo "Validation failed. Please check your input.";
    }
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDirectory = "uploads/"; // Directory to store uploaded files
    $targetFile = $targetDirectory . basename($_FILES["file"]["name"]);
    $uploadOk = true;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, the file already exists.";
        $uploadOk = false;
    }

    // Check file size (in this example, limit to 2MB)
    if ($_FILES["file"]["size"] > 2 * 1024 * 1024) {
        echo "Sorry, your file is too large.";
        $uploadOk = false;
    }

    // Allow certain file formats (you can adjust this as needed)
    $allowedFileTypes = array("jpg", "jpeg", "png", "gif", "pdf");
    if (!in_array($fileType, $allowedFileTypes)) {
        echo "Sorry, only JPG, JPEG, PNG, GIF, and PDF files are allowed.";
        $uploadOk = false;
    }

    if ($uploadOk) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
