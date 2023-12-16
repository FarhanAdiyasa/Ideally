const imageInput = document.getElementById("imageInput");
const imgElements = document.querySelectorAll("#imagePreviewContainer img");
if (imageInput) {
    imageInput.addEventListener("change", handleImageUpload);
}
const bodyElement = document.getElementById("body");
if (bodyElement) {
    bodyElement.classList.add("sidebar-collapse");
}

function addExistingImagesToPhotos(originalName = null) {
    var existingImages = $(".img-prv img");
    var files = [];
    let idx = 0;
    existingImages.each(function () {
        var imageUrl = $(this).attr("src");
        if (imageUrl && imageUrl.includes("blob")) {
            const timestamp = new Date().getTime();
            files.push(timestamp + "_" + originalName[idx]);
            idx++;
        } else if (imageUrl) {
            files.push(imageUrl.substring(imageUrl.lastIndexOf("/") + 1));
        }
    });

    document.getElementById("existing_images").value = files.join(",");
}
// document.getElementById("imagePreviewContainer").style.visibility = "visible";

const imgStyling = () => {
    for (const imgElement of imgElements) {
        document.getElementById("1").style.border =
            "2px dashed var(--N100, #03ac0e)";
        document.getElementById("imagePreviewContainer").style.visibility =
            "visible";
        imgElement.style.maxWidth = "100%";
        imgElement.style.maxHeight = "100%";
        if (imgElement.src != "") {
            imgElement.addEventListener("dragstart", handleDragStart);
            imgElement.addEventListener("dragover", handleDragOver);
            imgElement.addEventListener("drop", handleDrop);

            const button = document.createElement("button");
            button.textContent = "Remove";
            button.type = "button";
            button.addEventListener("click", () =>
                removeImage(button.parentNode.id)
            );

            const parentElement = imgElement.parentNode;
            parentElement.appendChild(button);
        }
    }
};

function handleImageUpload() {
    let index = 0;
    document.getElementById("1").style.border =
        "2px dashed var(--N100, #03ac0e)";
    document.getElementById("imagePreviewContainer").style.visibility =
        "visible";
    for (const count of imgElements) {
        if (count.src !== "") {
            index++;
        }
    }
    let originalName = [];
    for (const file of imageInput.files) {
        if (index > 3) {
            document.getElementById("error-img").style.visibility = "visible";
            return;
        }
        const blob = URL.createObjectURL(file);
        imgElements[index].src = blob;
        imgElements[index].style.maxWidth = "100%";
        imgElements[index].style.maxHeight = "100%";
        originalName.push(file.name);
        imgElements[index].addEventListener("dragstart", handleDragStart);
        imgElements[index].addEventListener("dragover", handleDragOver);
        imgElements[index].addEventListener("drop", handleDrop);

        const button = document.createElement("button");
        button.textContent = "Remove";
        button.type = "button";
        button.addEventListener("click", () =>
            removeImage(button.parentNode.id)
        );

        const parentElement = imgElements[index].parentNode;
        parentElement.appendChild(button);

        index++;
        if (document.getElementById("existing_images") !== null) {
            addExistingImagesToPhotos(originalName);
            console.log(document.getElementById("existing_images").value);
        }
    }
}

function handleDragOver(e) {
    e.preventDefault();
    e.dataTransfer.dropEffect = "move";
}

let draggedIndex; // Global variable to store the index of the dragged image

function handleDragStart(e) {
    draggedIndex = Array.from(e.target.parentNode.parentNode.children).indexOf(
        e.target.parentNode
    );
    e.dataTransfer.setData("text/plain", draggedIndex);
}

function handleDrop(e) {
    e.preventDefault();

    const dropTd = e.target.closest("td");
    const dropIndex = Array.from(dropTd.parentNode.children).indexOf(dropTd);

    const imageElements = document.querySelectorAll(
        "#imagePreviewContainer img"
    );

    let srcDragged = imageElements[draggedIndex].src;
    let srcDropped = imageElements[dropIndex].src;

    imageElements[dropIndex].src = srcDragged;

    if (dropIndex > draggedIndex) {
        for (let index = dropIndex - 1; index >= draggedIndex; index--) {
            srcDragged = imageElements[index].src;
            imageElements[index].src = srcDropped;
            srcDropped = srcDragged;
        }
    } else {
        for (let index = dropIndex + 1; index <= draggedIndex; index++) {
            srcDragged = imageElements[index].src;
            imageElements[index].src = srcDropped;
            srcDropped = srcDragged;
        }
    }
    if (document.getElementById("existing_images") !== null) {
        addExistingImagesToPhotos();
    }
}
function removeImage(imageId) {
    const imageContainer = document.getElementById(imageId);
    if (imageContainer) {
        let nowImg = 0;
        for (const count of imgElements) {
            if (count.src !== "") {
                nowImg++;
            }
        }
        let srcDragged;
        for (let index = imageId - 1; index < nowImg; index++) {
            if (index + 1 != nowImg) {
                srcDragged = imgElements[index + 1].src;
            }

            imgElements[index].src = srcDragged;
        }
        imgElements[nowImg - 1].removeAttribute("src");
        imgElements[nowImg - 1].parentElement.querySelector("button").remove();
    }
    if (document.getElementById("existing_images") !== null) {
        addExistingImagesToPhotos();
    }
}
function submitForm(action) {
    // Set the selected action in the hidden input
    $("#tanggal_publikasi").val(action == "1" ? "true" : "false");

    // Submit the form
    $("#agrForm").submit();
}

$(document).ready(function () {
    $(".rupiah").mask("000.000.000", {
        reverse: true,
    });
});
document.getElementById("default").addEventListener("input", function () {
    var count = this.value.length;
    var characterCountElement = document.getElementById("characterCount");

    characterCountElement.innerText = count;

    if (count > 70) {
        this.value = this.value.substring(0, 70);
        characterCountElement.textContent = 70;
    }
});
document.getElementById("default").addEventListener("input", function () {
    // Get the current character count
    var count = this.value.length;

    // Update the counter element
    document.getElementById("characterCount").innerText = count;
});
