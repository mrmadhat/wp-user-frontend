<div class="wpuf-fields">
    <div class="wp-media-buttons" v-if="field.insert_image == 'yes'">
        <button type="button" class="button insert-media add_media" data-editor="content">
            <span class="dashicons dashicons-admin-media insert-photo-icon"></span> <?php _e( 'Insert Photo', 'wp-user-frontend' ); ?>
        </button>
    </div>
    <br v-if="field.insert_image == 'yes'" />

    <textarea
        v-if="'no' === field.rich"
        :class="class_names('textareafield')"
        :placeholder="field.placeholder"
        :rows="field.rows"
        :cols="field.cols"
    >{{ field.default }}</textarea>

    <text-editor v-if="'no' !== field.rich" :rich="field.rich"></text-editor>

    <span v-if="field.help" class="wpuf-help">{{ field.help }}</span>
</div>
