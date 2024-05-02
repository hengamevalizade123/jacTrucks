<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" class="c-post__content">
	<div class="c-post__banner">
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
	</div>
	<div class="c-post-info">
		<h1 class="c-post__title">
			<?php
			the_title();
			?>
		</h1>
		<time class="c-info__date">
			<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0_52_19)">
					<path
						d="M11.25 1.12344H8.24766V0.376564C8.24766 0.277108 8.20815 0.181725 8.13782 0.111399C8.0675 0.0410729 7.97211 0.00156405 7.87266 0.00156405C7.7732 0.00156405 7.67782 0.0410729 7.60749 0.111399C7.53717 0.181725 7.49766 0.277108 7.49766 0.376564V1.12422H4.49766V0.376564C4.49766 0.277108 4.45815 0.181725 4.38782 0.111399C4.3175 0.0410728 4.22211 0.00156403 4.12266 0.00156403C4.0232 0.00156403 3.92782 0.0410728 3.85749 0.111399C3.78717 0.181725 3.74766 0.277108 3.74766 0.376564V1.12422H0.75C0.551088 1.12422 0.360322 1.20324 0.21967 1.34389C0.0790176 1.48454 0 1.67531 0 1.87422L0 11.2492C0 11.4481 0.0790176 11.6389 0.21967 11.7796C0.360322 11.9202 0.551088 11.9992 0.75 11.9992H11.25C11.4489 11.9992 11.6397 11.9202 11.7803 11.7796C11.921 11.6389 12 11.4481 12 11.2492V1.87422C12 1.67531 11.921 1.48454 11.7803 1.34389C11.6397 1.20324 11.4489 1.12422 11.25 1.12422M11.25 11.2492H0.75V1.87422H3.74766V2.25235C3.74766 2.3518 3.78717 2.44718 3.85749 2.51751C3.92782 2.58784 4.0232 2.62735 4.12266 2.62735C4.22211 2.62735 4.3175 2.58784 4.38782 2.51751C4.45815 2.44718 4.49766 2.3518 4.49766 2.25235V1.875H7.49766V2.25313C7.49766 2.35258 7.53717 2.44797 7.60749 2.51829C7.67782 2.58862 7.7732 2.62813 7.87266 2.62813C7.97211 2.62813 8.0675 2.58862 8.13782 2.51829C8.20815 2.44797 8.24766 2.35258 8.24766 2.25313V1.875H11.25V11.2492ZM8.625 5.99922H9.375C9.47446 5.99922 9.56984 5.95971 9.64016 5.88939C9.71049 5.81906 9.75 5.72368 9.75 5.62422V4.87422C9.75 4.77476 9.71049 4.67938 9.64016 4.60906C9.56984 4.53873 9.47446 4.49922 9.375 4.49922H8.625C8.52554 4.49922 8.43016 4.53873 8.35984 4.60906C8.28951 4.67938 8.25 4.77476 8.25 4.87422V5.62422C8.25 5.72368 8.28951 5.81906 8.35984 5.88939C8.43016 5.95971 8.52554 5.99922 8.625 5.99922ZM8.625 8.99922H9.375C9.47446 8.99922 9.56984 8.95971 9.64016 8.88939C9.71049 8.81906 9.75 8.72368 9.75 8.62422V7.87422C9.75 7.77476 9.71049 7.67938 9.64016 7.60906C9.56984 7.53873 9.47446 7.49922 9.375 7.49922H8.625C8.52554 7.49922 8.43016 7.53873 8.35984 7.60906C8.28951 7.67938 8.25 7.77476 8.25 7.87422V8.62422C8.25 8.72368 8.28951 8.81906 8.35984 8.88939C8.43016 8.95971 8.52554 8.99922 8.625 8.99922ZM6.375 7.49922H5.625C5.52554 7.49922 5.43016 7.53873 5.35983 7.60906C5.28951 7.67938 5.25 7.77476 5.25 7.87422V8.62422C5.25 8.72368 5.28951 8.81906 5.35983 8.88939C5.43016 8.95971 5.52554 8.99922 5.625 8.99922H6.375C6.47446 8.99922 6.56984 8.95971 6.64017 8.88939C6.71049 8.81906 6.75 8.72368 6.75 8.62422V7.87422C6.75 7.77476 6.71049 7.67938 6.64017 7.60906C6.56984 7.53873 6.47446 7.49922 6.375 7.49922ZM6.375 4.49922H5.625C5.52554 4.49922 5.43016 4.53873 5.35983 4.60906C5.28951 4.67938 5.25 4.77476 5.25 4.87422V5.62422C5.25 5.72368 5.28951 5.81906 5.35983 5.88939C5.43016 5.95971 5.52554 5.99922 5.625 5.99922H6.375C6.42425 5.99922 6.47301 5.98952 6.51851 5.97068C6.564 5.95183 6.60534 5.92421 6.64017 5.88939C6.67499 5.85456 6.70261 5.81322 6.72145 5.76773C6.7403 5.72223 6.75 5.67347 6.75 5.62422V4.87422C6.75 4.77476 6.71049 4.67938 6.64017 4.60906C6.56984 4.53873 6.47446 4.49922 6.375 4.49922ZM3.375 4.49922H2.625C2.52554 4.49922 2.43016 4.53873 2.35983 4.60906C2.28951 4.67938 2.25 4.77476 2.25 4.87422V5.62422C2.25 5.72368 2.28951 5.81906 2.35983 5.88939C2.43016 5.95971 2.52554 5.99922 2.625 5.99922H3.375C3.42425 5.99922 3.47301 5.98952 3.51851 5.97068C3.564 5.95183 3.60534 5.92421 3.64017 5.88939C3.67499 5.85456 3.70261 5.81322 3.72145 5.76773C3.7403 5.72223 3.75 5.67347 3.75 5.62422V4.87422C3.75 4.77476 3.71049 4.67938 3.64017 4.60906C3.56984 4.53873 3.47446 4.49922 3.375 4.49922ZM3.375 7.49922H2.625C2.52554 7.49922 2.43016 7.53873 2.35983 7.60906C2.28951 7.67938 2.25 7.77476 2.25 7.87422V8.62422C2.25 8.72368 2.28951 8.81906 2.35983 8.88939C2.43016 8.95971 2.52554 8.99922 2.625 8.99922H3.375C3.47446 8.99922 3.56984 8.95971 3.64017 8.88939C3.71049 8.81906 3.75 8.72368 3.75 8.62422V7.87422C3.75 7.77476 3.71049 7.67938 3.64017 7.60906C3.56984 7.53873 3.47446 7.49922 3.375 7.49922Z"
						fill="black" fill-opacity="0.6" />
				</g>
				<defs>
					<clipPath id="clip0_52_19">
						<rect width="12" height="12" fill="white" />
					</clipPath>
				</defs>
			</svg>
			تاریخ انتشار :
			<?php the_date(); ?>
		</time>
		<div class="c-info__study">
			<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M6.11765 0C2.82353 0 0.0941162 2.68235 0.0941162 6.02353C0.0941162 9.36471 2.77647 12.0471 6.11765 12.0471C9.45882 12.0471 12.1412 9.36471 12.1412 6.02353C12.1412 2.68235 9.41176 0 6.11765 0ZM6.11765 11.2941C3.2 11.2941 0.847057 8.94118 0.847057 6.02353C0.847057 3.10588 3.2 0.705882 6.11765 0.705882C9.03529 0.705882 11.3882 3.05882 11.3882 5.97647C11.3882 8.89412 9.03529 11.2471 6.11765 11.2471M9.88235 6.35294V7.05882H5.64706V3.52941H6.35294V6.35294H9.88235Z"
					fill="black" fill-opacity="0.6" />
			</svg>
			مدت زمان مطالعه :
			<span class="persian-number">
				<?php echo reading_time() ?>
			</span>
		</div>
	</div>
	<?php
	the_content();
	?>
	<div class="c-info__view">
		<a href="#" class="share-btn">
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M14.5 15.0667C14.5672 14.6498 14.5436 14.2234 14.4309 13.8165C14.3181 13.4096 14.1188 13.0318 13.8467 12.709C13.5745 12.3862 13.2358 12.126 12.8539 11.9461C12.4719 11.7662 12.0556 11.6709 11.6333 11.6667H9.56668C9.45175 11.6667 9.34153 11.7123 9.26026 11.7936C9.179 11.8749 9.13334 11.9851 9.13334 12.1V14.8C9.13184 14.8495 9.11656 14.8977 9.08922 14.939C9.06188 14.9804 9.02355 15.0133 8.97855 15.0341C8.93354 15.0548 8.88364 15.0626 8.83444 15.0566C8.78524 15.0506 8.73869 15.031 8.70001 15L2.83334 10C2.7135 9.89674 2.61733 9.76883 2.55141 9.62502C2.48549 9.48121 2.45137 9.32487 2.45137 9.16667C2.45137 9.00847 2.48549 8.85213 2.55141 8.70831C2.61733 8.5645 2.7135 8.4366 2.83334 8.33333L8.70001 3.33333C8.73869 3.30233 8.78524 3.28272 8.83444 3.27671C8.88364 3.27069 8.93354 3.27851 8.97855 3.29928C9.02355 3.32005 9.06188 3.35296 9.08922 3.3943C9.11656 3.43564 9.13184 3.48379 9.13334 3.53333V6.26667C9.13334 6.38159 9.179 6.49181 9.26026 6.57308C9.34153 6.65435 9.45175 6.7 9.56668 6.7H12.0667C13.5019 6.69997 14.8789 7.26783 15.8969 8.27958C16.9149 9.29133 17.4912 10.6648 17.5 12.1C17.5 14.4667 16.4333 15.9333 14.2667 16.5333L14.5 15.0667ZM11.6333 12.5C11.9367 12.501 12.2363 12.5677 12.5115 12.6955C12.7867 12.8234 13.0308 13.0093 13.2272 13.2406C13.4237 13.4718 13.5676 13.7429 13.6492 14.0351C13.7308 14.3273 13.7482 14.6338 13.7 14.9333L13.3667 17.0333C13.3608 17.099 13.37 17.1652 13.3935 17.2268C13.4171 17.2885 13.4544 17.3439 13.5026 17.3889C13.5508 17.4339 13.6087 17.4673 13.6718 17.4866C13.7349 17.5058 13.8015 17.5104 13.8667 17.5C16.8 16.9 18.3333 15.0667 18.3333 12.1C18.3333 10.438 17.6731 8.84403 16.4979 7.6688C15.3227 6.49357 13.7287 5.83333 12.0667 5.83333H10V3.56667C9.99716 3.35935 9.93578 3.15706 9.82294 2.98312C9.7101 2.80918 9.5504 2.67067 9.36225 2.58356C9.1741 2.49646 8.96516 2.4643 8.75953 2.4908C8.55389 2.5173 8.35993 2.60137 8.20001 2.73333L2.33335 7.73333C2.1169 7.91158 1.94259 8.13553 1.82292 8.38911C1.70325 8.64268 1.64119 8.9196 1.64119 9.2C1.64119 9.4804 1.70325 9.75732 1.82292 10.0109C1.94259 10.2645 2.1169 10.4884 2.33335 10.6667L8.20001 15.6667C8.36428 15.8026 8.56452 15.8878 8.77635 15.9121C8.98819 15.9363 9.20249 15.8984 9.3932 15.803C9.5839 15.7077 9.74279 15.559 9.85052 15.375C9.95825 15.191 10.0102 14.9796 10 14.7667V12.5H11.6333Z"
					fill="white" fill-opacity="0.6" />
			</svg>
			</svg>
			اشتراک گذاری:
		</a>
		<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink() ?>" class="facebook-share">
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M18.75 10C18.75 7.67936 17.8281 5.45376 16.1872 3.81282C14.5463 2.17187 12.3207 1.25 10 1.25C7.79115 1.24211 5.66103 2.06992 4.03715 3.56731C2.41328 5.06469 1.41582 7.12084 1.24495 9.3231C1.07409 11.5254 1.74246 13.7108 3.11594 15.4407C4.48942 17.1706 6.46636 18.3171 8.65001 18.65V12.55H6.40001V10H8.60001V8.05C8.60001 5.85 9.90001 4.65 11.9 4.65C12.85 4.65 13.85 4.8 13.85 4.8V6.95H12.75C11.65 6.95 11.35 7.65 11.35 8.3V10H13.8L13.4 12.55H11.35V18.65C13.4125 18.3279 15.2919 17.2791 16.6489 15.6929C18.0059 14.1066 18.7511 12.0875 18.75 10Z"
					fill="white" fill-opacity="0.6" />
			</svg>
		</a>
		<a href="https://t.me/share/url?url=<?php echo get_permalink() ?>" class="telegram-share">
			<svg width="20" height="20" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg"
				fill-opacity="0.6">
				<path
					d="M19.36 1.02667L0.693329 7.69333L6.02666 10.36L14.0267 5.02667L8.69333 11.6933L16.6933 17.0267L19.36 1.02667Z"
					stroke="white" stroke-opacity="0.6" stroke-width="1.33333" stroke-linejoin="round" />
			</svg>
		</a>
		<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_permalink() ?>"
			class="linkedin-share">
			<svg width="18" height="18" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M0.520012 16H3.52001V4.92H0.520012V16ZM2.00001 0C1.00001 0 0.200012 0.8 0.200012 1.8C0.200012 2.8 1.00001 3.6 2.00001 3.6C3.00001 3.6 3.80001 2.8 3.80001 1.8C3.80001 0.8 3.00001 0 2.00001 0ZM8.60001 6.6V4.92H5.60001V16H8.60001V10.28C8.60001 7.08 12.68 6.88 12.68 10.28V16H15.68V9.2C15.68 3.8 9.96001 4 8.60001 6.6Z"
					fill="white" fill-opacity="0.6" />
			</svg>
		</a>
		<a href="https://twitter.com/intent/tweet?text=<?php echo the_title() ?>!&url=<?php echo get_permalink() ?>"
			class="twiter-share">
			<svg width="20" height="20" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M13.7333 2.83333C14.4 2.43333 14.8667 1.86667 15.0667 1.13333C14.4503 1.4721 13.7877 1.71914 13.1 1.86667C12.5 1.23333 11.7667 0.933334 10.8667 0.933334C10 0.933334 9.26667 1.23333 8.66667 1.83333C8.37722 2.11432 8.14813 2.45138 7.99338 2.82392C7.83864 3.19645 7.76149 3.59664 7.76667 4C7.76667 4.26667 7.8 4.5 7.86667 4.66667C5.33333 4.56667 3.23333 3.53333 1.53333 1.46667C1.23333 1.96667 1.1 2.46667 1.1 3C1.1 4.1 1.56667 4.93333 2.46667 5.56667C1.93333 5.53333 1.5 5.4 1.1 5.16667C1.1 5.93333 1.33333 6.6 1.8 7.16667C2.24612 7.71778 2.87121 8.09519 3.56667 8.23333C3.3 8.3 3.03333 8.33333 2.76667 8.33333C2.5 8.33333 2.33333 8.3 2.2 8.26667C2.4 8.9 2.76667 9.4 3.26667 9.8C3.78291 10.1992 4.41416 10.4214 5.06667 10.4333C3.96667 11.3 2.7 11.7333 1.26667 11.7333C0.9 11.7333 0.666667 11.7333 0.5 11.7C1.9 12.6333 3.5 13.1 5.23333 13.1C7 13.1 8.6 12.6333 9.96667 11.7333C11.3333 10.8333 12.3333 9.73333 13 8.43333C13.6381 7.17286 13.9693 5.77945 13.9667 4.36667V3.96667C14.5685 3.51507 15.0873 2.96242 15.5 2.33333C14.9364 2.5791 14.3421 2.7473 13.7333 2.83333Z"
					fill="white" fill-opacity="0.6" />
			</svg>
		</a>
		<a href="https://wa.me/?text=<?php echo get_permalink() ?>" class="watsapp-share">
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M9.99999 1.66667C14.6 1.66667 18.3333 5.4 18.3333 10C18.3333 14.6 14.6 18.3333 9.99999 18.3333C8.57536 18.3327 7.17487 17.9653 5.93333 17.2667L5.66666 17.1333L3.13333 17.8667C2.99448 17.9106 2.84654 17.9173 2.70426 17.8863C2.56198 17.8552 2.43033 17.7874 2.32242 17.6896C2.21451 17.5918 2.13411 17.4675 2.08924 17.3289C2.04436 17.1904 2.03658 17.0425 2.06666 16.9L2.09999 16.8L2.83333 14.2667C2.06565 12.9762 1.66244 11.5016 1.66666 10C1.66666 5.4 5.39999 1.66667 9.99999 1.66667ZM9.99999 3.33333C8.80653 3.33316 7.63491 3.65336 6.60744 4.26051C5.57996 4.86767 4.73431 5.73951 4.15877 6.78502C3.58323 7.83053 3.2989 9.01137 3.33547 10.2043C3.37204 11.3972 3.72816 12.5584 4.36666 13.5667C4.53333 13.8333 4.59999 14.1333 4.53333 14.4667L4.49999 14.6L4.13333 15.8667L5.39999 15.5C5.76666 15.4 6.13333 15.4667 6.43333 15.6333C7.30702 16.1863 8.29735 16.5284 9.32603 16.6327C10.3547 16.737 11.3936 16.6005 12.3604 16.2342C13.3273 15.8679 14.1957 15.2817 14.8971 14.5219C15.5984 13.7622 16.1134 12.8497 16.4013 11.8567C16.6893 10.8636 16.7423 9.8172 16.5562 8.80013C16.3701 7.78306 15.95 6.82321 15.3291 5.99646C14.7082 5.16971 13.9035 4.49871 12.9786 4.03651C12.0537 3.57431 11.0339 3.33357 9.99999 3.33333ZM7.59999 6C7.6919 5.96 7.79278 5.9451 7.89233 5.95681C7.99188 5.96852 8.08654 6.00643 8.16666 6.06667C8.59999 6.36667 8.93333 6.8 9.19999 7.2L9.46666 7.6L9.59999 7.8C9.67641 7.90868 9.71459 8.03964 9.70856 8.17236C9.70253 8.30507 9.65262 8.43204 9.56666 8.53333L9.49999 8.6L8.73333 9.16667C8.69817 9.19287 8.67261 9.22991 8.66056 9.27207C8.64851 9.31423 8.65066 9.35918 8.66666 9.4C8.83332 9.73333 9.16666 10.2 9.49999 10.5333C9.86666 10.9 10.3667 11.2333 10.7 11.4C10.7667 11.4333 10.8667 11.4333 10.9333 11.3667L10.9667 11.3333L11.4667 10.5667C11.5591 10.4484 11.6926 10.369 11.8407 10.3444C11.9888 10.3197 12.1408 10.3514 12.2667 10.4333L12.7333 10.7333C13.2 11.0667 13.6 11.4 13.9667 11.8333C14.0332 11.9169 14.0747 12.0176 14.0865 12.1237C14.0983 12.2299 14.0799 12.3372 14.0333 12.4333C13.7 13.2 12.8667 13.8667 12 13.8333H11.8667H11.7C11.6667 13.8337 11.6333 13.8337 11.6 13.8333L11.4 13.8C10.6333 13.6667 9.39999 13.2333 8.09999 11.9333C6.83333 10.6667 6.39999 9.43333 6.23333 8.63333L6.19999 8.43333L6.16666 8.26667V8.13333C6.16642 8.11111 6.16642 8.08889 6.16666 8.06667C6.13333 7.2 6.79999 6.36667 7.56666 6.03333L7.59999 6Z"
					fill="white" fill-opacity="0.6" />
			</svg>
		</a>
	</div>
</article>