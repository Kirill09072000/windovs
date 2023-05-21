<!doctype html>
<html lang="en-US">
<head>
<title>DesktpMX - Download</title>
<meta charset="utf-8">
<meta name="description" content="RPCS3 is under steady development and the binaries we produce are highly experimental. Your system requirements may vary depending on your hardware configuration.">
<meta name="keywords" content="rpcs3, playstation, playstation 3, ps3, emulator, debugger, windows, linux, macos, freebsd, open source, nekotekina, kd11, download">
<?php include 'lib/module/sys-meta.php';?>
<meta property="og:title" content="RPCS3 - Download" />
<meta property="og:description" content="RPCS3 is under steady development and the binaries we produce are highly experimental. Your system requirements may vary depending on your hardware configuration." />
<meta property="og:image" content="https://rpcs3.net/img/meta/mobile/1200.png" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:url" content="https://rpcs3.net" />
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="RPCS3" />

<meta name="twitter:title" content="RPCS3 - Download">
<meta name="twitter:description" content="RPCS3 is under steady development and the binaries we produce are highly experimental. Your system requirements may vary depending on your hardware configuration.">
<meta name="twitter:image" content="https://rpcs3.net/img/meta/mobile/1200.png">
<meta name="twitter:site" content="@rpcs3">
<meta name="twitter:creator" content="@rpcs3">
<meta name="twitter:card" content="summary_large_image">
<?php include 'lib/module/sys-css.php';?>
<?php include 'lib/module/sys-js.php';?>
</head>
<body>
<?php include 'lib/module/sys-php.php';?>
<?php
if (@include_once("lib/compat/objects/Build.php"))
	$build = Build::get_latest();
?>
<div class="page-con-content">
	<div class="banner-con-container darkmode-header">
		<div id="object-particles">
		</div>
		<div class="wavebar-con-container">
			<div class="wavebar-con-wrap">
				<div class="wavebar-svg-object">
				</div>
				<div class="wavebar-svg-object">
				</div>
			</div>
		</div>
		<div class='banner-con-title fade-up-onstart'>
			<div class='banner-tx1-title fade-up-onstart pulsate'>
				<h1>Скачать</h1>
			</div>
			<div class='banner-con-divider'>
			</div>
			<div class='banner-tx2-title fade-up-onstart'>
				<p>
					 Загружайте наши последние версии операционных систем
				</p>
			</div>
		</div>
	</div>
	<div class="page-con-container">
		<div class="page-in-container">
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class='container-emp-block'>
						</div>
						<h2>Последние сборки</h2>
					</div>
				</div>
			</div>
			<div class='version-con-container'>
				<div class='version-img-container'>
					<div class='version-img-package'>
					</div>
				</div>
				<div class='version-ico-package'>
				</div>
				<div class='version-txt-container'>
					<div class='version-tx1-package darkmode-txt'>
						<span>
							<span class='version-buildversion'>
								<?php
								if (isset($build))
									printf("Build %s", $build->version);
								else
									printf("Эмулятор PlayStation 3");
								?>
							</span>
						</span>
					</div>
					<div class='version-tx2-package darkmode-txt'>
						<span>
							<span class='version-builddate'>
								<?php
								if (isset($build))
									printf("This build was released on %s", $build->fulldate);
								else
									printf("Unavailable");
								?>
							</span>
						</span>
					</div>
					<div class='package-tx2-desc-wide'>
						<div class='package-pr'>
							<div class='version-ico-git' style="background: url(/img/icons/buttons/pull-h.png) center left / 24px no-repeat;">
							</div>
							<?php
							if (isset($build))
								printf("Pull Request <a href=\"%s\" target=\"_blank\">#%d</a>",
								       $build->get_url_pr(),
								       $build->pr);
							else
								printf("Unavailable");
							?>
						</div>
						<div class='package-commit'>
							<div class='version-ico-git' style="background: url(/img/icons/buttons/commit-h.png) center left / 24px no-repeat;">
							</div>
							<?php
							if (isset($build))
								printf("Commit <a href=\"%s\" target=\"_blank\">%s</a>",
								       $build->get_url_commit(),
								       $build->get_commit_short());
							else
								printf("Unavailable");
							?>
						</div>
						<div class='package-author'>
							<div class='version-ico-git' style="background: url(/img/icons/buttons/github-h.png) center left / 24px no-repeat;">
							</div>
							<?php
							if (isset($build))
								printf("Submitted by <a href=\"%s\" target=\"_blank\">%s</a>",
								       $build->get_url_author(),
								       $build->author);
							else
								printf("Unavailable");
							?>
						</div>
					</div>
				</div>
			</div>
			<div class='downloadable-con-container'>
				<div class='downloadable-con-outer'>
					<div class='downloadable-con-inner-a'>
						<div class='downloadable-con-graphic' style="background: url(/img/graphics/download/windows.png) center top no-repeat; right: -52px; bottom: -38px;">
						</div>
						<div class='downloadable-con-image darkmode-invert' style="background: url(/img/icons/buttons/windows.png) center left / 42px no-repeat;">
						</div>
						<div class='downloadable-tx1-title darkmode-txt'>
							<span>Windows</span>
						</div>
						<div class='downloadable-tx2-desc darkmode-txt'>
							<span>Готовый образ Windows 11 22H2 без вирусов с офицального сайта <a href="https://www.microsoft.com/ru-ru/software-download/windows11">Microsoft</a> с октивацией и без Secure Boot TPM 2.0 для не поддержеваемых устройств.</span>
						</div>
						<div class='sha2-tx1-title darkmode-txt'>
							<span>SHA-256</span>
						</div>
						<div class='sha2-tx2-desc'>
							<span>
							<?php
							if (isset($build))
								printf("%s", $build->checksum_win);
							else
								printf("-------------------------------------------------------------------------------------------------");
							?>
							</span>
						</div>
						<div class='package-tx1-title darkmode-txt'>
							<span>Размер:</span>
						</div>
						<div class='package-tx2-desc darkmode-txt'>
							<span>
							<?php
							if (isset($build))
								printf("%s MB", $build->get_size_mb_windows());
							else
								printf("2.81 gb");
							?>
							</span>
						</div>
						<a href="https://drive.google.com/uc?export=download&confirm=no_antivirus&id=1lozwix4t6f4tWUao8sD96BK_eu4TE5Wo" download=""> <div class="package-con-button">
                        <div class="package-ico-button" style="background: url(/img/icons/buttons/windows-h.png) center / 22px no-repeat;">
                        </div>
                        <div class="package-tx1-button">
                        <span>
                        Скачать </span>
								<span>
								</span>
							</div>
						</div>
						<?php
						if (isset($build))
							printf("</a>");
						?>
					</div>
				</div>
				<div class='downloadable-con-outer'>
					<div class='downloadable-con-inner-a'>
						<div class='downloadable-con-graphic' style="background: url(/img/graphics/download/linux.png) center top no-repeat; right: -52px; bottom: -38px;">
						</div>
						<div class='downloadable-con-image darkmode-invert' style="background: url(/img/icons/buttons/linux.png) center left / 42px no-repeat;">
						</div>
						<div class='downloadable-tx1-title darkmode-txt'>
							<span>Linux</span>
						</div>
						<div class='downloadable-tx2-desc darkmode-txt'>
							<span>Последняя версия Astra Linux с офицального сайта без вирусов и всего остального просто Linux, Astra Linux в принципе ничего особеного. Просто чистый ISO образ.
							</span>
						</div>
						<div class='sha2-tx1-title darkmode-txt'>
							<span>SHA-256</span>
						</div>
						<div class='sha2-tx2-desc'>
							<span>
							<?php
							if (isset($build))
								printf("%s", $build->checksum_linux);
							else
								printf("-------------------------------------------------------------------------------------------------");
							?>
							</span>
						</div>
						<div class='package-tx1-title darkmode-txt'>
							<span>Размер:</span>
						</div>
						<div class='package-tx2-desc darkmode-txt'>
							<span>
							<?php
							if (isset($build))
								printf("%s MB", $build->get_size_mb_linux());
							else
								printf("5.2 gb");
							?>
							</span>
						</div>
			            <a href="https://drive.google.com/uc?export=download&confirm=no_antivirus&id=1OIc2SqJdWz3pNWV6W7TsLYcHkpGdpNeU" download=""> <div class="package-con-button">
                        <div class="package-ico-button" style="background: url(/img/icons/buttons/linux-h.png) center / 22px no-repeat;">
                        </div>
                        <div class="package-tx1-button">
                        <span>
                        Скачать </span>
                        </div>
                        </div>
                        </a>
							<div class='package-tx1-button'>
								<div class='package-tx1-button'>
								<span>
								<?php
								if (isset($build))
									printf("Download");
								else
									printf("");
								?>
								</span>
							</div>
						</div>
						<?php
						if (isset($build))
							printf("</a>");
						?>
					</div>
				</div>
				<div class='downloadable-con-outer'>
					<div class='downloadable-con-inner-a'>
						<div class="downloadable-con-graphic" style="background: url(/img/graphics/download/macos.png) center top no-repeat;right: -74px;bottom: -128px;width: 246px;height: 272px;">
						</div>
						<div class='downloadable-con-image darkmode-invert' style="background: url(/img/icons/buttons/macos.png) center left / 42px no-repeat;">
						</div>
						<div class='downloadable-tx1-title darkmode-txt'>
							<span>MacOS</span>
						</div>
						<div class='downloadable-tx2-desc darkmode-txt'>
							<span>Образ MacOS Ventura 13.3.1 (22E261) .pkg с офицального сайта для процесеров M1, M2. ВНИМАНИЕ перед устоновкой проверте совместимость OC с вашей системой!</span>
						</div>
						<div class='sha2-tx1-title darkmode-txt'>
							<span>SHA-256</span>
						</div>
						<div class='sha2-tx2-desc'>
							<span>
							<?php
							if (isset($build) && !is_null($build->checksum_mac))
								printf("%s", $build->checksum_mac);
							else
								printf("-------------------------------------------------------------------------------------------------");
							?>
							</span>
						</div>
						<div class='package-tx1-title darkmode-txt'>
							<span>Размер:</span>
						</div>
						<div class='package-tx2-desc darkmode-txt'>
							<span>
							<?php
							if (isset($build) && !is_null($build->get_size_mb_mac()))
								printf("%s MB", $build->get_size_mb_mac());
							else
								printf("11.0 gb");
							?>
							</span>
						</div>
			            <a href="https://drive.google.com/uc?export=download&confirm=no_antivirus&id=1-bLuEZvrvEpaxrldGMg81MTwPN4lB2PK" download=""> <div class="package-con-button">
                        <div class="package-ico-button" style="background: url(/img/icons/buttons/macos-h.png) center / 22px no-repeat;">
                        </div>
                        <div class="package-tx1-button">
                        <span>
                        Скачать </span>
                        </div>
                        </div>
                        </a>
							<div class='package-tx1-button'>
								<div class='package-tx1-button'>
								<span>
								<?php
								if (isset($build))
									printf("Download");
								else
									printf("");
								?>
								</span>
							</div>
						</div>
						<?php
						if (isset($build))
							printf("</a>");
						?>
					</div>
				</div>
			<div class='downloadable-con-container'>
				<div class='downloadable-con-outer'>
					<div class='downloadable-con-inner-a'>
						<div class='downloadable-con-graphic' style="background: url(/img/graphics/download/bsd.png) center top no-repeat; right: -52px; bottom: -38px;">
						</div>
						<div class='downloadable-con-image darkmode-invert' style="background: url(/img/icons/buttons/bsd.png) center left / 42px no-repeat;">
						</div>
						<div class='downloadable-tx1-title darkmode-txt'>
							<span>FreeBSD</span>
						</div>
						<div class='downloadable-tx2-desc darkmode-txt'>
							<span>Эту операцонаю систему надо подбирать в зависемоти от разных факторов. Короче вот просто сылка на сайт<a href="https://www.freebsd.org/where/"> сами разберайтесь.<br><br><br><br></span>
						</div>
						<a href="https://www.freebsd.org/where/">
						<div class='package-con-button'>
							<div class='package-ico-button' style="background: url(/img/icons/buttons/bsd-h.png) center / 22px no-repeat;">
							</div>
							<div class='package-tx1-button'>
								<span>FreeBSD</span>
							</div>
						</div>
						</a>
					</div>
				</div>
				<div class='downloadable-con-outer' style="width: 66.6666666666%;">
					<div class='downloadable-con-inner-a'>
						<div class='downloadable-con-graphic' style="background: url(/img/graphics/download/builds.png) center top no-repeat; right: -52px; bottom: -52px; width: 250px; height: 250px;">
						</div>
						<div class='downloadable-con-image darkmode-invert' style="background: url(/img/icons/buttons/history.png) center left / 42px no-repeat;">
						</div>
						<div class='downloadable-tx1-title darkmode-txt'>
							<span>Предыдущие сборки</span>
						</div>
						<div class='downloadable-tx2-desc darkmode-txt'>
							<span>С каждым новым скомпилированным двоичным файлом DesktpMX.ru сохраняет запись и сохраняет ее в нашем каталоге сборки. Каталог сборок позволяет просматривать и загружать каждую публично выпущенную и скомпилированную сборку, записанную нашей системой. Это позволяет пользователям просматривать полезные метаданные для каждой сборки, такие как размер файла, SHA, автор и коммит, из которого она была скомпилирована. </span>
							</span>
							<br><br>
						</div>
						<a href="https://rpcs3.net/compatibility?b">
							<div class='package-con-button' style="width: 225px;">
								<div class='package-ico-button' style="background: url(/img/icons/buttons/history-h.png) center / 22px no-repeat;">
								</div>
								<div class='package-tx1-button'>
									<span>
										Предыдущие сборки
									</span>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
            </div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<h2>Установка Windows</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p class="download-desc">
							 For Windows users, simply extract the compressed file using any decompression software that supports .7z.
							 <br>
							 Once uncompressed, place your RPCS3 folder in a convenient location to start, such as: <span class="highlight darkmode-highlight">C:\Users\Kratos\Desktop\RPCS3\rpcs3.exe</span>
							 <br>
							 <b>Download dependencies </b><span class="highlight darkmode-highlight"><a href="https://aka.ms/vs/17/release/vc_redist.x64.exe" target="_blank">Microsoft Visual C++ 2019 Redistributable</a></span>
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<h2>Установка на Linux</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p class="download-desc">
							 For Linux users, RPCS3 is packaged using the AppImage format. To run, execute <span class="highlight darkmode-highlight">chmod a+x ./rpcs3-*_linux64.AppImage &amp;&amp; ./rpcs3-*_linux64.AppImage</span>
							<br>
							<b>Download AppImage using CLI </b><span class="highlight darkmode-highlight">wget --content-disposition https://rpcs3.net/latest-appimage</span> or <span class="highlight darkmode-highlight">curl -JLO https://rpcs3.net/latest-appimage</span>
							<br>
							<b>Compile on Arch using AUR </b><span class="highlight darkmode-highlight">git clone https://aur.archlinux.org/rpcs3-git.git && cd rpcs3-git && makepkg -sri</span>
							<br>
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<h2>Установка на MacOS</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p class="download-desc">
							For macOS users, simply open the downloaded .DMG file and drag and drop the RPCS3 app into your applications folder when prompted.
							<br>
							Once installed, your RPCS3 application support directory will be found in: <span class="highlight darkmode-highlight">~/Library/Application Support/rpcs3/</span>
						</p>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<h2>Установка FreeBSD</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p class="download-desc">
							 For FreeBSD users, RPCS3 supports active FreeBSD 13 and FreeBSD 12 versions.
							<br>
							<b>Install as a package </b><span class="highlight darkmode-highlight">pkg install rpcs3</span>
							<br>
							<b>Compile using ports </b><span class="highlight darkmode-highlight">cd /usr/ports/emulators/rpcs3/ && make install clean</span>
							<br>
							<br>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-con-content darkmode-slimbar" style="background:#f7f7f7">
	<div class="page-con-container">
		<div class="page-in-container">
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class="container-emp-block"></div>
						<h2>Website Source Code</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 Downloading the website source allows you to clone, fork or contribute any enhancements via GitHub. RPCS3.net is licensed under the GNU General Public License v2.0. Its core developed and maintained by <a href='https://github.com/DAGINATSUKO' target="_blank">DAGINATSUKO</a>, while the compatibility database is developed and maintained by <a href='https://github.com/AniLeo' target="_blank">Ani</a>.
						</p>
					</div>
				</div>
			</div>
			<div class="generic-con-button ">
				<a href='https://github.com/DAGINATSUKO/www-rpcs3' target="_blank">
				<div class="generic-btn-button">
					<div class="generic-ico-button" style="background: url('/img/icons/buttons/github-h.png') no-repeat center">
					</div>
					<div class="generic-tx1-button">
						<span>Website Repository <span class="generic-tx2-label">/daginatsuko</span></span>
					</div>
				</div>
				</a>
				<a href='https://github.com/AniLeo/rpcs3-compatibility' target="_blank">
				<div class="generic-btn-button">
					<div class="generic-ico-button" style="background: url('/img/icons/buttons/github-h.png') no-repeat center">
					</div>
					<div class="generic-tx1-button">
						<span>Compatibility Repository <span class="generic-tx2-label">/anileo</span></span>
					</div>
				</div>
				</a>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class="container-emp-block"></div>
						<h2>Press Kit and Documentation</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 Our press kit is an amalgamation of all of the assets previewed on the <a href='/branding'>branding</a> page and more in a single package. It enables those who wish to promote the project and its development through high-quality digital media. We provide high-resolution assets such as our logo in 3 iterations, our supported operating systems, supported CPU and GPU hardware, rendering backends and much more. <br>
							<br>
							 All information found in the documentation section was obtained by collecting and reviewing data from various sources around the web.
						</p>
					</div>
				</div>
			</div>
			<div class="generic-con-button ">
				<a href='/cdn/press/Press%20Kit.zip' download>
				<div class="generic-btn-button">
					<div class="generic-ico-button" style="background: url('/img/icons/buttons/presskit-h.png') no-repeat center">
					</div>
					<div class="generic-tx1-button">
						<span>Download Press Kit <span class="generic-tx2-label">268 MB</span></span>
					</div>
				</div>
				</a>
				<a href='/cdn/docs/Docs.zip' download>
				<div class="generic-btn-button">
					<div class="generic-ico-button" style="background: url('/img/icons/buttons/docs-h.png') no-repeat center">
					</div>
					<div class="generic-tx1-button">
						<span>Download Documentation <span class="generic-tx2-label">36 MB</span></span>
					</div>
				</div>
				</a>
			</div>
		</div>
	</div>
	<?php include 'lib/module/inc-footer.php';?>
</div>
</body>
</html>
