<?php if (get_post_type() == 'information'): ?>
    <?php if (has_term('syogai', 'info_category', $post)): ?>
        <span class="area-tag info">生涯学習</span>
    <?php elseif (has_term('sapporo', 'classroom_category', $post)): ?>
        <span class="area-tag sapporo">札幌教室</span>
    <?php elseif (has_term('sendai', 'classroom_category', $post)): ?>
        <span class="area-tag sendai">仙台教室</span>
    <?php elseif (has_term('ochanomizu', 'classroom_category', $post)): ?>
        <span class="area-tag ochanomizu">お茶の水教室</span>
    <?php elseif (has_term('kawagoe', 'classroom_category', $post)): ?>
        <span class="area-tag kawagoe">川越教室</span>
    <?php elseif (has_term('hiroshima', 'classroom_category', $post)): ?>
        <span class="area-tag hiroshima">広島教室</span>
    <?php elseif (has_term('shinjuku', 'classroom_category', $post)): ?>
        <span class="area-tag shinjyuku">新宿教室</span>
    <?php elseif (has_term('yokohama', 'classroom_category', $post)): ?>
        <span class="area-tag yokohama">横浜教室</span>
    <?php elseif (has_term('ikebukuro', 'classroom_category', $post)): ?>
        <span class="area-tag ikebukuro">池袋教室</span>
    <?php elseif (has_term('tsudanuma', 'classroom_category', $post)): ?>
        <span class="area-tag tsudanuma">津田沼教室</span>
    <?php elseif (has_term('shibuya', 'classroom_category', $post)): ?>
        <span class="area-tag shibuya">渋谷教室</span>
    <?php elseif (has_term('online', 'classroom_category', $post)): ?>
        <span class="area-tag shibuya">オンライン教室</span>
    <?php elseif (has_term('nagoya', 'classroom_category', $post)): ?>
        <span class="area-tag nagoya">名古屋教室</span>
    <?php elseif (has_term('osaka', 'classroom_category', $post)): ?>
        <span class="area-tag osaka">大阪教室</span>
    <?php elseif (has_term('umeda', 'classroom_category', $post)): ?>
        <span class="area-tag umeda">梅田教室</span>
    <?php elseif (has_term('kobe', 'classroom_category', $post)): ?>
        <span class="area-tag kobe">神戸教室</span>
    <?php elseif (has_term('kanazawa', 'classroom_category', $post)): ?>
        <span class="area-tag kanazawa">金沢教室</span>
    <?php elseif (has_term('fukuoka', 'classroom_category', $post)): ?>
        <span class="area-tag fukuoka">福岡教室</span>
    <?php elseif (has_term('yakuzemi', 'info_category', $post)): ?>
        <span class="area-tag info">薬ゼミ</span>
    <?php elseif (has_term('tools', 'info_category', $post)): ?>
        <span class="area-tag tools">新刊情報</span>
    <?php elseif (has_term('country-exam', 'info_category', $post)): ?>
        <span class="area-tag country-exam">国家試験</span>
    <?php elseif (has_term('association', 'info_category', $post)): ?>
        <span class="area-tag info">学会報告</span>
    <?php endif; ?>
<?php elseif (get_post_type() == 'post'): ?>
    <?php if (in_category('seminar_sapporo')): ?>
        <span class="area-tag sapporo">札幌教室</span>
    <?php elseif (in_category('seminar_sendai')): ?>
        <span class="area-tag sendai">仙台教室</span>
    <?php elseif (in_category('seminar_ochanomizu')): ?>
        <span class="area-tag ochanomizu">お茶の水教室</span>
    <?php elseif (in_category('seminar_kawagoe')): ?>
        <span class="area-tag kawagoe">川越教室</span>
    <?php elseif (in_category('seminar_hiroshima')): ?>
        <span class="area-tag hiroshima">広島教室</span>
    <?php elseif (in_category('seminar_shinjuku')): ?>
        <span class="area-tag shinjyuku">新宿教室</span>
    <?php elseif (in_category('seminar_yokohama')): ?>
        <span class="area-tag yokohama">横浜教室</span>
    <?php elseif (in_category('seminar_ikebukuro')): ?>
        <span class="area-tag ikebukuro">池袋教室</span>
    <?php elseif (in_category('seminar_tsudanuma')): ?>
        <span class="area-tag tsudanuma">津田沼教室</span>
    <?php elseif (in_category('seminar_shibuya')): ?>
        <span class="area-tag shibuya">渋谷教室</span>
    <?php elseif (in_category('seminar_online')): ?>
        <span class="area-tag shibuya">オンライン教室</span>
    <?php elseif (in_category('seminar_nagoya')): ?>
        <span class="area-tag nagoya">名古屋教室</span>
    <?php elseif (in_category('seminar_osaka')): ?>
        <span class="area-tag osaka">大阪教室</span>
    <?php elseif (in_category('seminar_umeda')): ?>
        <span class="area-tag umeda">梅田教室</span>
    <?php elseif (in_category('seminar_kobe')): ?>
        <span class="area-tag kobe">神戸教室</span>
    <?php elseif (in_category('seminar_kanazawa')): ?>
        <span class="area-tag kanazawa">金沢教室</span>
    <?php elseif (in_category('seminar_fukuoka')): ?>
        <span class="area-tag fukuoka">福岡教室</span>
    <?php elseif (in_category('all')): ?>
        <span class="area-tag all">全教室</span>
    <?php endif; ?>
<?php endif; ?>