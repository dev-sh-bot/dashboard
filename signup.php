<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/compatibility.php"); ?>
    <meta name="description" content="">
    <title>Sign Up </title>
    <?php include("includes/style.php"); ?>
</head>

<body>
    <div class="login-page position-relative">
        <div class="login-bg-shaps-1 position-absolute">
            <svg xmlns="http://www.w3.org/2000/svg" width="649" height="563" viewBox="0 0 649 563" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M585.74 -116.863C640.979 -48.7975 623.136 48.5324 629.337 135.993C635.593 224.22 672.772 322.278 622.018 394.758C571.478 466.933 465.217 460.043 382.051 489.136C303.542 516.6 230.934 575.567 149.228 560.148C65.794 544.404 1.36918 477.704 -47.2508 408.125C-93.0136 342.635 -115.876 263.802 -113.674 183.913C-111.608 108.968 -74.924 42.6223 -35.4192 -21.1278C4.48218 -85.5179 46.805 -150.527 114.563 -184.4C186.052 -220.138 267.683 -223.525 346.771 -212.189C433.806 -199.714 530.352 -185.114 585.74 -116.863Z" fill="#978EF4" fill-opacity="0.06" />
            </svg>
        </div>
        <div class="login-bg-shaps-2 position-absolute">
            <svg xmlns="http://www.w3.org/2000/svg" width="683" height="478" viewBox="0 0 683 478" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.655098 414.343C3.70128 326.736 81.0781 265.057 133.841 195.03C187.066 124.388 223.429 26.0249 309.305 4.69912C394.818 -16.5365 470.425 58.4461 552.248 91.126C629.489 121.976 722.97 125.194 774.459 190.481C827.038 257.149 831.816 349.759 822.785 434.161C814.284 513.602 779.751 588.066 725.624 646.864C674.846 702.025 603.61 727.964 531.951 750.094C459.573 772.446 384.962 793.674 311.619 774.718C234.238 754.718 170.455 703.662 118.259 643.172C60.8176 576.604 -2.39936 502.188 0.655098 414.343Z" fill="#978EF4" fill-opacity="0.06" />
            </svg>
        </div>


        <div class="login-wrapper position-relative d-flex align-items-center justify-content-center flex-column">
            <h3>Sign Up</h3>
            <form class="w-100">
                <div class="input-icon-wrapper position-relative">
                    <span class="input-icons position-absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <g clip-path="url(#clip0_46_2310)">
                                <path d="M21.3333 4H2.66665C2.31302 4 1.97389 4.14048 1.72384 4.39052C1.47379 4.64057 1.33331 4.97971 1.33331 5.33333V18.6667C1.33331 19.0203 1.47379 19.3594 1.72384 19.6095C1.97389 19.8595 2.31302 20 2.66665 20H21.3333C21.6869 20 22.0261 19.8595 22.2761 19.6095C22.5262 19.3594 22.6666 19.0203 22.6666 18.6667V5.33333C22.6666 4.97971 22.5262 4.64057 22.2761 4.39052C22.0261 4.14048 21.6869 4 21.3333 4ZM20.3066 18.6667H3.77331L8.43998 13.84L7.47998 12.9133L2.66665 17.8933V6.34667L10.9533 14.5933C11.2031 14.8417 11.5411 14.9811 11.8933 14.9811C12.2456 14.9811 12.5835 14.8417 12.8333 14.5933L21.3333 6.14V17.8067L16.4266 12.9L15.4866 13.84L20.3066 18.6667ZM3.53998 5.33333H20.2533L11.8933 13.6467L3.53998 5.33333Z" fill="#8C8C8C" />
                            </g>
                            <defs>
                                <clipPath id="clip0_46_2310">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </span>
                    <input type="text" class="d-block w-100" placeholder="Enter Email">
                </div>
                <div class="input-icon-wrapper position-relative">
                    <span class="input-icons position-absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12.0001 2.40002C10.7271 2.40002 9.50616 2.90574 8.60598 3.80591C7.70581 4.70609 7.2001 5.92699 7.2001 7.20002C7.2001 8.47306 7.70581 9.69396 8.60598 10.5941C9.50616 11.4943 10.7271 12 12.0001 12C13.2731 12 14.494 11.4943 15.3942 10.5941C16.2944 9.69396 16.8001 8.47306 16.8001 7.20002C16.8001 5.92699 16.2944 4.70609 15.3942 3.80591C14.494 2.90574 13.2731 2.40002 12.0001 2.40002ZM8.4001 7.20002C8.4001 6.24525 8.77938 5.32957 9.45451 4.65444C10.1296 3.97931 11.0453 3.60002 12.0001 3.60002C12.9549 3.60002 13.8706 3.97931 14.5457 4.65444C15.2208 5.32957 15.6001 6.24525 15.6001 7.20002C15.6001 8.1548 15.2208 9.07048 14.5457 9.74561C13.8706 10.4207 12.9549 10.8 12.0001 10.8C11.0453 10.8 10.1296 10.4207 9.45451 9.74561C8.77938 9.07048 8.4001 8.1548 8.4001 7.20002ZM6.0109 13.2C5.69486 13.1988 5.38168 13.2599 5.08933 13.3799C4.79697 13.5 4.53118 13.6765 4.30721 13.8995C4.08323 14.1225 3.90548 14.3875 3.78414 14.6793C3.6628 14.9711 3.60025 15.284 3.6001 15.6C3.6001 17.6292 4.5997 19.1592 6.1621 20.1564C7.7005 21.1368 9.7741 21.6 12.0001 21.6C14.2261 21.6 16.2997 21.1368 17.8381 20.1564C19.4005 19.1604 20.4001 17.628 20.4001 15.6C20.4001 14.9635 20.1472 14.3531 19.6972 13.903C19.2471 13.4529 18.6366 13.2 18.0001 13.2H6.0109ZM4.8001 15.6C4.8001 14.9364 5.3377 14.4 6.0109 14.4H18.0001C18.3184 14.4 18.6236 14.5265 18.8486 14.7515C19.0737 14.9765 19.2001 15.2818 19.2001 15.6C19.2001 17.1708 18.4537 18.3408 17.1925 19.1436C15.9085 19.9632 14.0821 20.4 12.0001 20.4C9.9181 20.4 8.0917 19.9632 6.8077 19.1436C5.5477 18.3396 4.8001 17.172 4.8001 15.6Z" fill="#8C8C8C" />
                        </svg>
                    </span>
                    <input type="password" class="d-block w-100" placeholder="Create User name">
                </div>
                <div class="input-icon-wrapper input-show-password position-relative">
                    <span class="input-icons position-absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M13.5 15C13.5 15.3978 13.342 15.7794 13.0607 16.0607C12.7794 16.342 12.3978 16.5 12 16.5C11.6022 16.5 11.2206 16.342 10.9393 16.0607C10.658 15.7794 10.5 15.3978 10.5 15C10.5 14.6022 10.658 14.2206 10.9393 13.9393C11.2206 13.658 11.6022 13.5 12 13.5C12.3978 13.5 12.7794 13.658 13.0607 13.9393C13.342 14.2206 13.5 14.6022 13.5 15ZM8 8V7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7V8H16.875C17.7038 8 18.4987 8.32924 19.0847 8.91529C19.6708 9.50134 20 10.2962 20 11.125V18.875C20 19.7038 19.6708 20.4987 19.0847 21.0847C18.4987 21.6708 17.7038 22 16.875 22H7.125C6.2962 22 5.50134 21.6708 4.91529 21.0847C4.32924 20.4987 4 19.7038 4 18.875V11.125C4 10.2962 4.32924 9.50134 4.91529 8.91529C5.50134 8.32924 6.2962 8 7.125 8H8ZM9.25 7V8H14.75V7C14.75 6.27065 14.4603 5.57118 13.9445 5.05546C13.4288 4.53973 12.7293 4.25 12 4.25C11.2707 4.25 10.5712 4.53973 10.0555 5.05546C9.53973 5.57118 9.25 6.27065 9.25 7ZM7.125 9.25C6.62772 9.25 6.15081 9.44754 5.79917 9.79917C5.44754 10.1508 5.25 10.6277 5.25 11.125V18.875C5.25 19.3723 5.44754 19.8492 5.79917 20.2008C6.15081 20.5525 6.62772 20.75 7.125 20.75H16.875C17.3723 20.75 17.8492 20.5525 18.2008 20.2008C18.5525 19.8492 18.75 19.3723 18.75 18.875V11.125C18.75 10.6277 18.5525 10.1508 18.2008 9.79917C17.8492 9.44754 17.3723 9.25 16.875 9.25H7.125Z" fill="#8C8C8C" />
                        </svg>
                    </span>
                    <input type="password" class="d-block w-100" placeholder="Password">

                    <button class="show-password-btn position-absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <g clip-path="url(#clip0_46_2321)">
                                <path d="M8.37061 5.80767L10.8041 8.24121L10.8157 8.11374C10.8157 6.83515 9.77666 5.79608 8.49808 5.79608L8.37061 5.80767Z" fill="#8C8C8C" />
                                <path d="M8.49807 4.25101C10.6303 4.25101 12.3608 5.98154 12.3608 8.11378C12.3608 8.61208 12.2604 9.08719 12.0866 9.52367L14.3463 11.7834C15.5128 10.81 16.4322 9.55073 17 8.11378C15.6597 4.72229 12.3647 2.31964 8.4981 2.31964C7.41652 2.31964 6.38132 2.51277 5.41949 2.86042L7.08821 4.52525C7.52465 4.3553 7.99977 4.25101 8.49807 4.25101Z" fill="#8C8C8C" />
                                <path d="M0.77254 2.14577L2.53396 3.90719L2.88548 4.25871C1.61077 5.2553 0.60259 6.58024 0 8.11373C1.33653 11.5052 4.63531 13.9079 8.49808 13.9079C9.69555 13.9079 10.8389 13.6761 11.8857 13.2551L12.2141 13.5834L14.4661 15.8392L15.4511 14.8581L1.75754 1.16077L0.77254 2.14577ZM5.04477 6.41413L6.23837 7.60772C6.2036 7.77383 6.18043 7.93991 6.18043 8.11373C6.18043 9.39232 7.2195 10.4314 8.49808 10.4314C8.6719 10.4314 8.83801 10.4082 9.00025 10.3734L10.1938 11.567C9.68008 11.822 9.10842 11.9765 8.49808 11.9765C6.36584 11.9765 4.63531 10.246 4.63531 8.11373C4.63531 7.50343 4.78983 6.93173 5.04477 6.41413Z" fill="#8C8C8C" />
                            </g>
                            <defs>
                                <clipPath id="clip0_46_2321">
                                    <rect width="17" height="17" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
                <div class="input-icon-wrapper input-show-password position-relative">
                    <span class="input-icons position-absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M13.5 15C13.5 15.3978 13.342 15.7794 13.0607 16.0607C12.7794 16.342 12.3978 16.5 12 16.5C11.6022 16.5 11.2206 16.342 10.9393 16.0607C10.658 15.7794 10.5 15.3978 10.5 15C10.5 14.6022 10.658 14.2206 10.9393 13.9393C11.2206 13.658 11.6022 13.5 12 13.5C12.3978 13.5 12.7794 13.658 13.0607 13.9393C13.342 14.2206 13.5 14.6022 13.5 15ZM8 8V7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7V8H16.875C17.7038 8 18.4987 8.32924 19.0847 8.91529C19.6708 9.50134 20 10.2962 20 11.125V18.875C20 19.7038 19.6708 20.4987 19.0847 21.0847C18.4987 21.6708 17.7038 22 16.875 22H7.125C6.2962 22 5.50134 21.6708 4.91529 21.0847C4.32924 20.4987 4 19.7038 4 18.875V11.125C4 10.2962 4.32924 9.50134 4.91529 8.91529C5.50134 8.32924 6.2962 8 7.125 8H8ZM9.25 7V8H14.75V7C14.75 6.27065 14.4603 5.57118 13.9445 5.05546C13.4288 4.53973 12.7293 4.25 12 4.25C11.2707 4.25 10.5712 4.53973 10.0555 5.05546C9.53973 5.57118 9.25 6.27065 9.25 7ZM7.125 9.25C6.62772 9.25 6.15081 9.44754 5.79917 9.79917C5.44754 10.1508 5.25 10.6277 5.25 11.125V18.875C5.25 19.3723 5.44754 19.8492 5.79917 20.2008C6.15081 20.5525 6.62772 20.75 7.125 20.75H16.875C17.3723 20.75 17.8492 20.5525 18.2008 20.2008C18.5525 19.8492 18.75 19.3723 18.75 18.875V11.125C18.75 10.6277 18.5525 10.1508 18.2008 9.79917C17.8492 9.44754 17.3723 9.25 16.875 9.25H7.125Z" fill="#8C8C8C" />
                        </svg>
                    </span>
                    <input type="password" class="d-block w-100" placeholder="Confirm Password">

                    <button class="show-password-btn position-absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <g clip-path="url(#clip0_46_2321)">
                                <path d="M8.37061 5.80767L10.8041 8.24121L10.8157 8.11374C10.8157 6.83515 9.77666 5.79608 8.49808 5.79608L8.37061 5.80767Z" fill="#8C8C8C" />
                                <path d="M8.49807 4.25101C10.6303 4.25101 12.3608 5.98154 12.3608 8.11378C12.3608 8.61208 12.2604 9.08719 12.0866 9.52367L14.3463 11.7834C15.5128 10.81 16.4322 9.55073 17 8.11378C15.6597 4.72229 12.3647 2.31964 8.4981 2.31964C7.41652 2.31964 6.38132 2.51277 5.41949 2.86042L7.08821 4.52525C7.52465 4.3553 7.99977 4.25101 8.49807 4.25101Z" fill="#8C8C8C" />
                                <path d="M0.77254 2.14577L2.53396 3.90719L2.88548 4.25871C1.61077 5.2553 0.60259 6.58024 0 8.11373C1.33653 11.5052 4.63531 13.9079 8.49808 13.9079C9.69555 13.9079 10.8389 13.6761 11.8857 13.2551L12.2141 13.5834L14.4661 15.8392L15.4511 14.8581L1.75754 1.16077L0.77254 2.14577ZM5.04477 6.41413L6.23837 7.60772C6.2036 7.77383 6.18043 7.93991 6.18043 8.11373C6.18043 9.39232 7.2195 10.4314 8.49808 10.4314C8.6719 10.4314 8.83801 10.4082 9.00025 10.3734L10.1938 11.567C9.68008 11.822 9.10842 11.9765 8.49808 11.9765C6.36584 11.9765 4.63531 10.246 4.63531 8.11373C4.63531 7.50343 4.78983 6.93173 5.04477 6.41413Z" fill="#8C8C8C" />
                            </g>
                            <defs>
                                <clipPath id="clip0_46_2321">
                                    <rect width="17" height="17" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
                <button class="btn d-block w-100" type="submit">Register</button>
            </form>

            <div class="extra-fields">
                <p class="mb-0">Already have an account</p>
                <p class="mb-0"><a href="./login.php">Login here !</a></p>
            </div>
        </div>
    </div>

    <?php include("includes/scripts.php"); ?>
</body>

</html>