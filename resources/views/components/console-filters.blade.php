<div class="filters">
    <div class="filters_title">
        <h2>Filters</h2>
        <!-- Insert clear all button -->
    </div>
    <form action="" class="filters_form">
        <section class="filters_section filters_section_search-generation">
            <!-- Search input field -->
            <fieldset class="filters_section_fieldset">
                <legend class="filters_section_fieldset_legend">Search</legend>
                <div class="filters_section_fieldset_container">
                    <input type="text" name="search" id="search" placeholder="Search consoles..." class="filters_section_fieldset_container_search filters_section_fieldset_container_input-text">
                </div>
            </fieldset>

            <!-- Console Generations -->
            <fieldset class="filters_section_fieldset">
                <legend class="filters_section_fieldset_legend">Generations</legend>
                <div class="filters_section_fieldset_container">
                    <label for="all-generation" class="filters_section_fieldset_container_label">All Generations
                        <input type="checkbox" name="generation" id="all-generation" value="all-generation" class="filters_section_fieldset_container_label_checkbox">
                        <span class="filters_section_fieldset_container_label_checkmark"></span>
                    </label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="generation" id="1" value="1" class="filters_section_fieldset_container_checkbox">
                    <label for="1" class="filters_section_fieldset_container_label">1st Generation</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="generation" id="2" value="2" class="filters_section_fieldset_container_checkbox">
                    <label for="2" class="filters_section_fieldset_container_label">2nd Generation</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="generation" id="3" value="3" class="filters_section_fieldset_container_checkbox">
                    <label for="3" class="filters_section_fieldset_container_label">3rd Generation</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="generation" id="4" value="4" class="filters_section_fieldset_container_checkbox">
                    <label for="4" class="filters_section_fieldset_container_label">4th Generation</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="generation" id="5" value="5" class="filters_section_fieldset_container_checkbox">
                    <label for="5" class="filters_section_fieldset_container_label">5th Generation</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="generation" id="6" value="6" class="filters_section_fieldset_container_checkbox">
                    <label for="6" class="filters_section_fieldset_container_label">6th Generation</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="generation" id="7" value="7" class="filters_section_fieldset_container_checkbox">
                    <label for="7" class="filters_section_fieldset_container_label">7th Generation</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="generation" id="8" value="8" class="filters_section_fieldset_container_checkbox">
                    <label for="8" class="filters_section_fieldset_container_label">8th Generation</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="generation" id="9" value="9" class="filters_section_fieldset_container_checkbox">
                    <label for="9" class="filters_section_fieldset_container_label">9th Generation</label>
                </div>
            </fieldset>
        </section>

        <!-- Manufacturers dropdown -->
        <section class="filters_section filters_section_manufacturers-release">
            <fieldset class="filters_section_fieldset">
                <legend class="filters_section_fieldset_legend">Manufacturers</legend>
                <div class="filters_section_fieldset_container">
                    <select name="manufacturer" id="manufacturer" class="filters_section_fieldset_container_dropdown">
                        <option value="all" class="filters_section_fieldset_container_dropdown_option">All Manufacturers</option>
                        <option value="sony" class="filters_section_fieldset_container_dropdown_option">Sony</option>
                        <option value="microsoft" class="filters_section_fieldset_container_dropdown_option">Microsoft</option>
                        <option value="nintendo" class="filters_section_fieldset_container_dropdown_option">Nintendo</option>
                        <option value="sega" class="filters_section_fieldset_container_dropdown_option">Sega</option>
                        <option value="atari" class="filters_section_fieldset_container_dropdown_option">Atari</option>
                        <option value="other" class="filters_section_fieldset_container_dropdown_option">Others</option>
                    </select>
                </div>
            </fieldset>

            <!-- Release year min/max slider -->
            <fieldset class="filters_section_fieldset">
                <legend class="filters_section_fieldset_legend">Release Year</legend>
                <div class="filters_section_fieldset_container">
                    <input type="range" min="1985" max="2026" value="1985" id="release-year" class="filters_section_fieldset_container_slider">
                    <output for="release-year" class="filters_section_fieldset_container_slider_output">1985</output>
                </div>
            </fieldset>
        </section>

        <!-- Video output checkboxes -->
        <section class="filters_section filters_section_video">
            <fieldset class="filters_section_fieldset">
                <legend class="filters_section_fieldset_legend">Video Output</legend>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="video-output" id="all-video-output" value="all-video-output" class="filters_section_fieldset_container_checkbox">
                    <label for="all-video-output" class="filters_section_fieldset_container_label">All Video Outputs</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="video-output" id="composite" value="composite" class="filters_section_fieldset_container_checkbox">
                    <label for="composite" class="filters_section_fieldset_container_label">Composite</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="video-output" id="svideo" value="svideo" class="filters_section_fieldset_container_checkbox">
                    <label for="svideo" class="filters_section_fieldset_container_label">S-Video</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="video-output" id="component" value="component" class="filters_section_fieldset_container_checkbox">
                    <label for="component" class="filters_section_fieldset_container_label">Component</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="video-output" id="scart" value="scart" class="filters_section_fieldset_container_checkbox">
                    <label for="scart" class="filters_section_fieldset_container_label">SCART</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="video-output" id="hdmi" value="hdmi" class="filters_section_fieldset_container_checkbox">
                    <label for="hdmi" class="filters_section_fieldset_container_label">HDMI</label>
                </div>
            </fieldset>
        </section>

        <!-- Max resolution checkboxes -->
        <section class="filters_section filters_section_resolution">
            <fieldset class="filters_section_fieldset">
                <legend class="filters_section_fieldset_legend">Max Resolution</legend>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="max-resolution" id="all-resolution" value="all-resolution" class="filters_section_fieldset_container_checkbox">
                    <label for="all-max-resolution" class="filters_section_fieldset_container_label">All Resolutions</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="max-resolution" id="240p" value="240p" class="filters_section_fieldset_container_checkbox">
                    <label for="240p" class="filters_section_fieldset_container_label">240p</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="max-resolution" id="480i" value="480i" class="filters_section_fieldset_container_checkbox">
                    <label for="480i" class="filters_section_fieldset_container_label">480i</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="max-resolution" id="480p" value="480p" class="filters_section_fieldset_container_checkbox">
                    <label for="480p" class="filters_section_fieldset_container_label">480p</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="max-resolution" id="720p" value="720p" class="filters_section_fieldset_container_checkbox">
                    <label for="720p" class="filters_section_fieldset_container_label">720p</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="max-resolution" id="1080i" value="1080i" class="filters_section_fieldset_container_checkbox">
                    <label for="1080i" class="filters_section_fieldset_container_label">1080i</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="max-resolution" id="1080p" value="1080p" class="filters_section_fieldset_container_checkbox">
                    <label for="1080p" class="filters_section_fieldset_container_label">1080p</label>
                </div>
                <div class="filters_section_fieldset_container">
                    <input type="checkbox" name="max-resolution" id="4k" value="4k" class="filters_section_fieldset_container_checkbox">
                    <label for="4k" class="filters_section_fieldset_container_label">4k</label>
                </div>
            </fieldset>
        </section>

    </form>
</div>