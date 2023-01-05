//#region CONSTANTS
const OAUTH_URL = `/oauth/api/web/v3/`;
const IMG_FORMAT = "data:image/png;base64,";
const DEFAULT_AVATAR_IMG = "assets/img/avatar-placeholder.png";
const GET_PROPERTY = {
  method: "GET",
  mode: "cors",
  credentials: "include",
};
const ANONYMOUS_USER = "(anonymous)";
const ERROR_TITLE = "Unauthorize User";
const ERROR_DESCRIPTION = "Please sign up or log in to your account";
//#endregion

//#region BINIDNG ELEMENTS
const protalServiceLink = document.getElementById("portal-service-link");
const adminMenuItem = document.getElementById("admin-id");
const userName = document.getElementById("profile-name-header");
const userPhoto = document.getElementById("user-img-id");
const hamburgerMenu = document.querySelector(".navbar-toggler");
const userAdminMenu = document.getElementById("user-admin-menu-id");
const userInfoMenu = document.querySelector(".user-list");
const redirectBtn = document.getElementById("login-link-id");
//#endregion

//#region LOAD COMPONENT
window.addEventListener("load", async () => {
  const user = await whoAmI();
  if (user.UserName != ANONYMOUS_USER) {
    const response = await getPersonalInfo();

    if (!response.isAdmin) {
      adminMenuItem.classList.add("d-none");
    } else {
      adminMenuItem.classList.remove("d-none");
    }

    userName.innerHTML = response.fullName;

    if (response.profilePicture) {
      userPhoto.src = `${IMG_FORMAT}${response.profilePicture}`;
    } else {
      userPhoto.src = DEFAULT_AVATAR_IMG;
    }
  } else {
    // showErrorModal(ERROR_TITLE, ERROR_DESCRIPTION);
    userAdminMenu.classList.add("d-none");
    hamburgerMenu.classList.add("d-none");
    userInfoMenu.classList.add("d-none");
    redirectBtn.classList.add("ml-auto");
    redirectBtn.classList.remove("d-none");
  }
});
//#endregion

//#region PAGE LISTENERS
protalServiceLink.addEventListener("click", () => {
  window.location.href = `${window.location.origin}/${getServiceName()}`;
});

redirectBtn.addEventListener("click", () => {
  window.location.href = `${getDomain()}/oauth/Login`;
});
//#endregion

//#region BACKEND CALLING
//#region AUTHORIZING
const whoAmI = async () => {
  try {
    const url = `${getDomain()}/oauth/api/web/v1/LoginAndSignup/WhoAmI`;
    const response = await fetch(url, GET_PROPERTY);

    return await response.json();
  } catch (error) {
    console.log(error);
  }
};
//#endregion

//#region GET FUNCTIONS
const getPersonalInfo = async () => {
  try {
    const url = `${getDomain()}${OAUTH_URL}personalInfo`;
    let response = await fetch(url, GET_PROPERTY);

    return await response.json();
  } catch (error) {
    console.log(error);
  }
};
//#endregion

//#endregion

//#region ERROR MODAL
//#region SHOW ERROR MODAL
const showErrorModal = (title, description) => {
  let mainContainer = document.querySelector(".main-container");

  if (!mainContainer) {
    mainContainer = document.body;
  }

  const div = document.createElement("div");
  div.classList.add(
    "modal__wrap",
    "d-none",
    "align-items-center",
    "justify-content-center",
    "error"
  );
  const id = "error-modal-id";
  div.setAttribute("id", id);
  div.innerHTML = errorModal(title, description);
  mainContainer.append(div);
  modalListener(div);
};
//#endregion

//#region LISTENERS ERROR MODAL
const modalListener = (div) => {
  const closeBtns = div.querySelectorAll(".close-modal");
  closeBtns.forEach((closeBtn) =>
    closeBtn.addEventListener("click", () => {
      hideErrorMsg(div);
      div.remove();
    })
  );
};
//#endregion

//#region HTML ERROR MODAL
const errorModal = (title, description) => {
  return `
      <div class="modal__inner d-flex flex-column align-items-center">
        <button
          class="btn btn-primary border-0 modal__btn-close close-btn d-flex justify-content-center align-items-center modal__close close-modal"
          type="button"
        >
          <img src="assets/img/icon_x.svg" /></button
        ><img
          class="modal__icon"
          src="assets/img/icon_alert-circle.svg"
          width="46"
          height="48"
        />
        <h2 class="modal__title" id="error-modal-title-id">${title}</h2>
        <p class="modal__text m-0 text-center" id="error-modal-desc-id">
          ${description}
        </p>
      </div>
  `;
};
//#endregion

//#endregion

//#region HELPERS
const hideErrorMsg = (element) => {
  element.classList.remove("error");
};

const getDomain = () => {
  const regex = /https:\/\/localhost:[0-9]{4,5}\/oauth/;

  if (regex.test(location.href)) {
    return `https://${location.host}`;
  } else {
    if (
      location.hostname === "localhost" ||
      location.hostname === "127.0.0.1"
    ) {
      return "https://my.dev.gamanet.com";
    } else {
      return ``;
    }
  }
};

const getServiceName = () => window.location.href.split("/")[3];
//#endregion
