<?php include('header.php')?>

<body>
  <div class="admin-shell">
    <div class="sidebar-backdrop" data-sidebar-close></div>

  <?php include('sidebar.php')?>
    <div class="admin-main">
  <?php include('navbar.php')?>
  
   
      <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Overview</p>
                <h1 class="h3 mb-1">Dashboard</h1>
                <p class="text-muted mb-0">Monitor performance, sales, users, and support from one clean workspace.</p>
              </div>
            </div>
            <div class="heading-actions"><button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi bi-download" aria-hidden="true"></i> Export</button><button class="btn btn-primary btn-sm" type="button"><i class="bi bi-file-earmark-plus" aria-hidden="true"></i> Create Report</button></div>
          </div>

  <?php include('dashboard-content.php') ?>

        </div>
      </main>
	  
	  
	  <?php include('footer.php') ?>

     