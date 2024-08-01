<template>
  <admin-layout>
    <div class="container-xxl" id="kt_content_container">
      <div class="row g-5 gx-xxl-8 mb-xxl-3">
        <div class="col-xxl-12">
          <div class="card">
            <div class="card-header border-0 pt-6">
              <div class="card-title"></div>
              <div class="card-toolbar">
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_add_user">
                    <i class="ki-duotone ki-plus fs-2"></i> Add Blog
                  </button>
                </div>

                <!-- Add Blog Modal -->
                <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered mw-650px">
                    <div class="modal-content">
                      <div class="modal-header" id="kt_modal_add_user_header">
                        <h2 class="fw-bold">Add Blog</h2>
                        <div class="btn btn-icon btn-sm btn-active-icon-primary"
                          @click="closeModal('kt_modal_add_user')">
                          <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                      </div>
                      <div class="modal-body px-5 my-7">
                        <form @submit.prevent="submitForm" id="kt_modal_add_user_form" class="form">
                          <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll"
                            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
                            data-kt-scroll-dependencies="#kt_modal_add_user_header"
                            data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                            <div class="fv-row mb-7">
                              <label class="d-block fw-semibold fs-6 mb-5">Blog File</label>
                              <input type="file" @change="handleFileChange" name="blog_file"
                                class="form-control form-control-solid mb-3 mb-lg-0" accept=".png, .jpg, .jpeg">
                              <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            </div>
                            <div class="fv-row mb-7">
                              <label class="required fw-semibold fs-6 mb-2">Full Title</label>
                              <input v-model="form.title" type="text" name="title"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full title">
                            </div>
                            <div class="fv-row mb-7">
                              <label class="required fw-semibold fs-6 mb-2">Blog content</label>
                              <textarea v-model="form.content" name="content"
                                class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="Blog content"></textarea>
                            </div>
                          </div>
                          <div class="text-center pt-10">
                            <button type="button" class="btn btn-light me-3"
                              @click="closeModal('kt_modal_add_user')">Discard</button>
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                              <span class="indicator-label">Submit</span>
                              <span class="indicator-progress">Please wait... <span
                                  class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Edit Blog Modal -->
                <div class="modal fade" id="kt_modal_edit_user" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered mw-650px">
                    <div class="modal-content">
                      <div class="modal-header" id="kt_modal_edit_user_header">
                        <h2 class="fw-bold">Edit Blog</h2>
                        <div class="btn btn-icon btn-sm btn-active-icon-primary"
                          @click="closeModal('kt_modal_edit_user')">
                          <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                      </div>
                      <div class="modal-body px-5 my-7">
                        <form @submit.prevent="updateForm" id="kt_modal_edit_user_form" class="form">
                          <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_edit_user_scroll"
                            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
                            data-kt-scroll-dependencies="#kt_modal_edit_user_header"
                            data-kt-scroll-wrappers="#kt_modal_edit_user_scroll" data-kt-scroll-offset="300px">
                            <div class="fv-row mb-7">
                              <label class="d-block fw-semibold fs-6 mb-5">Blog File</label>
                              <input type="file" @change="handleEditFileChange" name="blog_file"
                                class="form-control form-control-solid mb-3 mb-lg-0" accept=".png, .jpg, .jpeg">
                              <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            </div>
                            <div class="fv-row mb-7">
                              <label class="required fw-semibold fs-6 mb-2">Full Title</label>
                              <input v-model="editForm.title" type="text" name="title"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full title">
                            </div>
                            <div class="fv-row mb-7">
                              <label class="required fw-semibold fs-6 mb-2">Blog content</label>
                              <textarea v-model="editForm.content" name="content"
                                class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="Blog content"></textarea>
                            </div>
                          </div>
                          <div class="text-center pt-10">
                            <button type="button" class="btn btn-light me-3"
                              @click="closeModal('kt_modal_edit_user')">Discard</button>
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                              <span class="indicator-label">Update</span>
                              <span class="indicator-progress">Please wait... <span
                                  class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="card-body py-4">
              <table id="kt_datatable_dom_positioning"
                class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead>
                  <tr class="fw-bold fs-6 text-gray-800 px-7">
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="blog in blogs" :key="blog.blog_id">
                    <td>{{ blog.title }}</td>
                    <td>{{ blog.content }}</td>
                    <td>
                      <img v-if="blog.image" :src="`${publicPath}storage/${blog.image}`" alt="Blog Image" width="100">
                    </td>
                    <td>
                      <button class="btn btn-sm btn-primary" @click="editBlog(blog)">Edit</button>
                      <button class="btn btn-sm btn-danger" @click="confirmDelete(blog.blog_id)">Delete</button>
                    </td>

                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </admin-layout>
</template>

<script>
import AdminLayout from '../../Layouts/AdminLayout.vue';
import Swal from 'sweetalert2';
import { router } from '@inertiajs/vue3';
import { reactive } from 'vue';

export default {
  name: 'BlogCURD',
  components: {
    AdminLayout,
  },
  props: {
    blogs: Array,
  },
  data() {
    return {
      publicPath: import.meta.env.VITE_APP_URL || '/',
      form: reactive({
        blog_file: null,
        title: '',
        content: ''
      }),
      editForm: reactive({
        id: null,
        blog_file: null,
        title: '',
        content: ''
      })
    };
  },
  mounted() {
    this.$nextTick(() => {
      $("#kt_datatable_dom_positioning").DataTable({
        "language": {
          "lengthMenu": "Show _MENU_",
        },
        "dom":
          "<'row mb-2'" +
          "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
          "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
          ">" +

          "<'table-responsive'tr>" +

          "<'row'" +
          "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
          "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
          ">"
      });
    });
  },
  methods: {
    handleFileChange(event) {
      this.form.blog_file = event.target.files[0];
    },
    handleEditFileChange(event) {
      this.editForm.blog_file = event.target.files[0];
    },
    submitForm() {
      const formData = new FormData();
      formData.append('blog_file', this.form.blog_file);
      formData.append('title', this.form.title);
      formData.append('content', this.form.content);

      router.post('/admin/blogs', formData, {
        onSuccess: () => {
          this.resetForm();
          this.closeModal('kt_modal_add_user');
          Swal.fire({
            title: 'Success!',
            text: 'Blog added successfully.',
            icon: 'success',
            confirmButtonText: 'OK'
          }).then(() => {
            window.location.reload();
          });
        },
        onError: (errors) => {
          let errorMessage = '';
          Object.values(errors).forEach((error) => {
            errorMessage += `${error}<br>`;
          });
          Swal.fire({
            title: 'Error!',
            html: errorMessage,
            icon: 'error',
            confirmButtonText: 'OK'
          });
        }
      });
    },
    editBlog(blog) {
      this.editForm.id = blog.blog_id;
      this.editForm.title = blog.title;
      this.editForm.content = blog.content;
      this.editForm.blog_file = null; // reset the file input

      this.$nextTick(() => {
        $('#kt_modal_edit_user').modal('show');
      });
    },
    updateForm() {
      const formData = new FormData();
      formData.append('blog_file', this.editForm.blog_file);
      formData.append('title', this.editForm.title);
      formData.append('content', this.editForm.content);
      formData.append('_method', 'PUT');

      router.post(`/admin/blogs/${this.editForm.id}`, formData, {
        onSuccess: () => {
          this.resetEditForm();
          this.closeModal('kt_modal_edit_user');
          Swal.fire({
            title: 'Success!',
            text: 'Blog updated successfully.',
            icon: 'success',
            confirmButtonText: 'OK'
          }).then(() => {
            window.location.reload();
          });
        },
        onError: (errors) => {
          let errorMessage = '';
          Object.values(errors).forEach((error) => {
            errorMessage += `${error}<br>`;
          });
          Swal.fire({
            title: 'Error!',
            html: errorMessage,
            icon: 'error',
            confirmButtonText: 'OK'
          });
        }
      });
    },
    resetForm() {
      this.form.blog_file = null;
      this.form.title = '';
      this.form.content = '';
    },
    resetEditForm() {
      this.editForm.id = null;
      this.editForm.blog_file = null;
      this.editForm.title = '';
      this.editForm.content = '';
    },
    closeModal(modalId) {
      $(`#${modalId}`).modal('hide');
    },
    confirmDelete(blogId) {
      Swal.fire({
        title: 'Are you sure?',
        text: 'This action cannot be undone.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!'
      }).then((result) => {
        if (result.isConfirmed) {
          this.deleteBlog(blogId);
        }
      });
    },
    deleteBlog(blogId) {
  router.post(`/admin/blogs/${blogId}`, {
    onSuccess: () => {
      Swal.fire({
        title: 'Deleted!',
        text: 'Blog has been deleted.',
        icon: 'success',
        confirmButtonText: 'OK'
      }).then(() => {
        window.location.reload();
      });
    },
    onError: () => {
      Swal.fire({
        title: 'Error!',
        text: 'There was an issue deleting the blog.',
        icon: 'error',
        confirmButtonText: 'OK'
      });
    }
  });
}

  }
};

</script>
