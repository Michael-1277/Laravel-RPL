@extends('layouts.app')

@section('title', 'About - Michael.ID')

@section('content')
<section id="about" class="py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <button class="btn btn-terminal mb-4">About</button>
            </div>
        </div>

        <div class="row">
            <!-- Left: About Text + Pie Chart -->
            <div class="col-lg-6 mb-4">
                <p class="text-light mb-4">
                    <span class="terminal-prompt">console.log('developer-info')</span>
                </p>
                <p class="text-light">
                    A passionate software developer with experience in full-stack development and system design.
                    Committed to writing clean, efficient code and staying current with emerging technologies.
                </p>
                <p class="text-light">
                    <span class="terminal-prompt text-success">></span>
                    <span class="text-secondary">Location:</span>
                    <span class="text-info">Surakarta, Indonesia</span>
                </p>

                <!-- Pie Chart Container -->
                <div class="mt-5 p-4 card card-linux">
                    <h6 class="text-warning mb-3 text-center">Client Satisfaction Rate</h6>
                    
                    <!-- The Canvas Element for the Chart -->
                    <div style="max-width: 250px; margin: 0 auto;">
                        <canvas id="satisfactionChart"></canvas>
                    </div>

                    <p class="text-secondary small text-center mt-3 mb-0">
                        {{ $metrics['satisfaction'] }}% Satisfaction ({{ $metrics['satisfied_count'] }}/{{ $metrics['total_feedback'] }})
                    </p>
                </div>
            </div>

            <!-- Right: Achievement Metrics -->
            <div class="col-lg-6">
                <h5 class="section-title text-warning mb-4">Achievement Metrics</h5>
                <div class="card card-linux p-4">
                    <div class="row">
                        <div class="col-12 mb-4 text-center">
                            <h3 class="terminal-prompt text-success mb-2">{{ $metrics['projects'] }}+</h3>
                            <p class="text-secondary small mb-0">Projects Completed</p>
                        </div>
                        <div class="col-6 mb-3 text-center">
                            <h3 class="terminal-prompt text-success mb-2">{{ $metrics['support'] }}</h3>
                            <p class="text-secondary small mb-0">Support Available</p>
                        </div>
                        <div class="col-6 mb-3 text-center">
                            <h3 class="terminal-prompt text-success mb-2">{{ $metrics['experience'] }}+</h3>
                            <p class="text-secondary small mb-0">Years Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Script to render the chart -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('satisfactionChart');
    
    // Check if Chart.js is loaded
    if (typeof Chart !== 'undefined' && ctx) {
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Satisfied', 'Not Satisfied'],
                datasets: [{
                    data: [{{ $metrics['satisfied_count'] }}, {{ $metrics['total_feedback'] - $metrics['satisfied_count'] }}],
                    backgroundColor: ['#28a745', '#dc3545'],
                    borderWidth: 0,
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            color: '#adb5bd',
                            font: { size: 11 },
                            boxWidth: 12,
                            padding: 8
                        }
                    }
                },
                cutout: '60%'
            }
        });
    } else {
        console.error('Chart.js not found or canvas missing.');
    }
});
</script>
@endsection