<?php
  // Path to the PDF file (can be a database or file system lookup)
  $filePath = './docs/pdf.pdf';

  // Ensure the file exists
  if (!file_exists($filePath)) {
      http_response_code(404);
      echo 'File not found';
      exit;
  }

  // Set headers to indicate a PDF file
  header('Content-Type: application/json');
  header('Content-Disposition: inline; filename="' . basename($filePath) . '"');
  header('Content-Length: ' . filesize($filePath));

  // Read and output the file
  readfile($filePath);
  exit;
?>
