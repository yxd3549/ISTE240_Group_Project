<?php
$title = "What is an OS?";
$section = "tutorials";
$next_page = "tutorials//unix_components.php";
$rel_path_home = "../../";
require_once $rel_path_home . "assets/php/page_start.php";
require_once PATH_PHP . "head.php";
require_once PATH_PHP . "utilities.php"
?>
    <main role="main" class="container">

        <div class="starter-template">
            <h1>Computing Baiscs - What is an OS?</h1>
            <p class="lead">Your computer's operating system (OS) manages all of the software and hardware on the computer.
                Most of the time, there are several different computer programs running at the same time, and they all need to
                access your computer's central processing unit (CPU), memory, and storage. The operating system coordinates all
                of this to make sure each program gets what it needs.
            </p>
        </div>

        <div>
            <h4>Types of operating systems</h4>
            <p>Operating systems usually come pre-loaded on any computer you buy. Most people use the operating system that
                comes with their computer, but it's possible to upgrade or even change operating systems.
                The three most common operating systems for personal computers are Microsoft Windows, Mac OS X, and Linux.</p>

            <p>Modern operating systems use a graphical user interface, or GUI (pronounced gooey). A GUI lets you use your mouse
                to click icons, buttons, and menus, and everything is clearly displayed on the screen using a combination of graphics
                and text.
            </p>
            <img src="../../assets/media/operating_system.jpg" alt="operating_system" height="400" width="650">
            <p>Each operating system's GUI has a different look and feel, so if you switch to a different operating system it may seem unfamiliar at first.
                However, modern operating systems are designed to be easy to use, and most of the basic principles are the same.
            </p>

            <h4>Microsoft Windows</h4>
            <p>Microsoft created the Windows operating system in the mid-1980s. Over the years, there have been many different versions
                of Windows, but the most recent ones are Windows 10 (released in 2015), Windows 8 (2012), Windows 7 (2009), and Windows Vista (2007).
                Windows comes pre-loaded on most new PCs, which helps to make it the most popular operating system in the world.
            </p>
            <img src="../../assets/media/operating_system1.jpg" alt="operating_system" height="400" width="650">
            <br><br>
            <h4>Mac OS X</h4>
            <p>Mac OS is a line of operating systems created by Apple. It comes preloaded on all new Macintosh computers, or Macs. All of the recent versions are known as OS X (pronounced O-S Ten),
                and the specific versions include El Capitan (released in 2015),Yosemite (2014), Mavericks (2013), Mountain Lion (2012),
                and Lion (2011).</p>

            <h4>Linux</h4>
            <p>Linux (pronounced LINN-ux) is a family of open-source operating systems, which means they can be modified and distributed
                by anyone around the world. This is different from proprietary software like Windows, which can only be modified by the
                company that owns it. The advantages of Linux are that it is free, and there are many different distributions—or versions—you can choose from.
            </p>
            <p>According to StatCounter Global Stats, Linux users account for less than 2% of global operating systems. However, most servers run Linux because it's
                relatively easy to customize.
            </p>
            <img src="../../assets/media/linux.jpg" alt="Linux_system" height="380" width="500">
            <br><br>
            <h4>Operating systems for mobile devices</h4>
            <p>The operating systems we've been talking about so far were designed to run on desktop and laptop computers.
                Mobile devices such as phones, tablet computers, and MP3 players are different from desktop and laptop computers,
                so they run operating systems that are designed specifically for mobile devices. Examples of mobile operating systems include Apple iOS and Google Android.
                In the screenshot below, you can see iOS running on an iPad.</p>
            <img src="../../assets/media/mobile.png" alt="mobile_system" height="500" width="660">
            <p>Operating systems for mobile devices generally aren't as fully featured as those made for desktop and laptop computers, and they aren't able to run all of the same software. However,
                you can still do a lot of things with them, like watch movies, browse the Web, manage your calendar, and play games.</p>
            <?php
            require_once PATH_PHP . "next.php";
            ?>
        </div>
    </main><!-- /.container -->

<?php
require_once PATH_PHP . "footer.php";
?>