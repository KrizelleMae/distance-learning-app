<?php
include './auth.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <?php include '../includes/links.php'; ?>

    <link rel="stylesheet" href="../css/all-styles.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/navbar.css" />

    <script src="../tailwind/tailwind-cdn.js"></script>

    <script src="../sweetalert2/jquery-3.6.0.min.js"></script>
    <script src="../sweetalert2/sweetalert2.all.min.js"></script>
  </head>
  <body>
    <div class="container mx-auto my-16">
      <div class="pb-16">
        <div class="float-left">
          <a
            class="text-lg text-gray-700 hover:bg-gray-200 hover:px-5 hover:rounded hover:p-2 hover:no-underline hover:text-black hover:decoration-none"
            href="./application.php"
          >
            <i class="fa fa-chevron-left"></i> &nbsp; Back to Application
          </a>
        </div>

        <div class="float-right">
          <div class="text-lg uppercase">Application review</div>
        </div>
      </div>

      <div class="bg-gray-100 p-7 rounded pb-9">
        <div class="float-left mr-16 pr-16">
          <small>Student:</small>
          <p
            class="text-2xl text-gray-700 font-semibold uppercase tracking-wide"
          >
            Krizelle Mae Falcasantos
          </p>
        </div>

        <div class="ml-16">
          <div class="float-left mr-16 pr-16">
            <small class="">Program: </small>
            <p class="text-xl text-gray-600 font-medium">
              Masters in Education
            </p>
          </div>

          <div class="ml-16">
            <small class=""> Application status: <br /> </small>
            <span
              class="bg-gray-500 text-white text-xs font-bold mr-2 px-2.5 py-0.5 rounded"
              >pending</span
            >
          </div>
        </div>
      </div>

      <div class="mt-16">
        <?php include './components/modal-acc.php'; ?>
      </div>

      <div class="my-16 float-right">
        <button
          class="px-6 py-3 bg-green-600 text-white rounded mr-3 hover:bg-green-700 hover:no-underline hover:text-white"
          id="btn-approve"
        >
          <i class="fa fa-thumbs-up"></i> &nbsp; Approve application
        </button>

        <button
          class="px-6 py-3 bg-red-600 text-white rounded hover:bg-red-800 hover:no-underline hover:text-white"
          id="btn-decline"
        >
          <i class="fa fa-ban"></i> &nbsp; Decline
        </button>
      </div>
    </div>

    <script src="./js/answers.js"></script>
  </body>
</html>
